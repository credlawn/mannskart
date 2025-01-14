<?php

namespace RachidLaasri\LaravelInstaller\Repositories;

use App\Models\SettingTwo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class ApplicationStatusRepository implements ApplicationStatusRepositoryInterface
{
    public string $baseLicenseUrl = 'https://portal.liquid-themes.com/api/license';

    public function financePage(): string
    {
        // Retorna diretamente a página sem validação de licença
        return 'panel.admin.finance.gateways.particles.finance';
    }

    public function financeLicense(): bool
    {
        // Retorna sempre true para ignorar validação de licença
        return true;
    }

    public function licenseType(): ?string
    {
        // Retorna um tipo de licença padrão para ignorar validação
        return 'Extended License';
    }

    public function check(string $licenseKey, bool $installed = false): bool
    {
        // Ignora verificação de licença e retorna true
        return true;
    }

    public function portal()
    {
        // Retorna dados simulados sem buscar licença real
        return [
            'liquid_license_type' => 'Extended License',
            'liquid_license_domain_key' => 'demo-license',
            'blocked' => false,
        ];
    }

    public function getVariable(string $key)
    {
        // Busca o valor diretamente dos dados simulados
        $portal = $this->portal();
        return data_get($portal, $key);
    }

    public function save($data): bool
    {
        // Simula salvamento de dados no armazenamento local
        return Storage::disk('local')->put('portal', serialize($data));
    }

    public function setLicense(): void
    {
        // Ignora validação e atualiza configurações com valores padrão
        $data = $this->portal();

        if (is_null($data)) {
            return;
        }

        $data['installed'] = true;
        $this->save($data);

        if (
            Schema::hasTable('settings_two')
            && Schema::hasColumn('settings_two', 'liquid_license_type')
            && Schema::hasColumn('settings_two', 'liquid_license_domain_key')
        ) {
            SettingTwo::query()->first()->update([
                'liquid_license_type'       => $data['liquid_license_type'],
                'liquid_license_domain_key' => $data['liquid_license_domain_key'],
            ]);
        }
    }

    public function generate(Request $request): bool
    {
        // Simula geração de licença sem realizar validações
        if ($request->exists(['liquid_license_status', 'liquid_license_domain_key', 'liquid_license_key'])) {
            $data = [
                'liquid_license_key'        => $request->input('liquid_license_key'),
                'liquid_license_domain_key' => $request->input('liquid_license_domain_key'),
            ];

            // Salva os dados simulados
            return $this->save($data);
        }

        return false;
    }

    public function next($request, Closure $next)
    {
        // Ignora verificações e permite continuar
        return $next($request);
    }

    public function webhook($request)
    {
        // Ignora verificações relacionadas ao webhook
        return response()->noContent();
    }

    public function appKey(): string
    {
        // Retorna um hash simulado para a chave do aplicativo
        return md5(config('app.key'));
    }
}
