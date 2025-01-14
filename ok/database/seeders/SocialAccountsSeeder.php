<?php

namespace Database\Seeders;

use App\Models\SocialMediaAccounts;
use Illuminate\Database\Seeder;

class SocialAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createAllSocials();
    }

    private function createAllSocials(): void
    {
        $socials = [
            [
                'title'    => 'Linkedin',
                'subtitle' => 'Developments in the sector',
                'key'      => 'linkedin',
                'link'     => '#',
                'icon'     => '<svg width="50" height="52" viewBox="0 0 50 52" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M42.4358 43.9153H35.1192V32.1428C35.1192 29.3353 35.0705 25.7228 31.3137 25.7228C27.5033 25.7228 26.9193 28.7803 26.9193 31.9403V43.9153H19.6051V19.7053H26.6297V23.0128H26.7271C28.1602 20.4978 30.8221 18.9953 33.6568 19.1028C41.0732 19.1028 42.4383 24.1153 42.4383 30.6328L42.4358 43.9153ZM11.3492 16.3953C9.00359 16.3953 7.10326 14.4428 7.10326 12.0328C7.10326 9.62284 9.00359 7.67034 11.3492 7.67034C13.6948 7.67034 15.5951 9.62284 15.5951 12.0328C15.5951 14.4428 13.6948 16.3953 11.3492 16.3953ZM15.0063 43.9153H7.68236V19.7053H15.0063V43.9153ZM46.0832 0.690341H4.00579C2.01786 0.667841 0.387613 2.30534 0.363281 4.34784V47.7578C0.387613 49.8028 2.01786 51.4403 4.00579 51.4178H46.0832C48.076 51.4428 49.7136 49.8053 49.7403 47.7578V4.34534C49.7111 2.29784 48.0736 0.660341 46.0832 0.687841" /> </svg>',
            ],
            [
                'title'    => 'Telegram',
                'subtitle' => 'Fast instant communication',
                'key'      => 'telegram',
                'link'     => '#',
                'icon'     => '<svg width="54" height="44" viewBox="0 0 54 44" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M1.90766 21.6842L13.9835 25.7855L42.6529 8.25838C43.0684 8.0042 43.4942 8.56864 43.1358 8.89856L21.431 28.8769L20.6238 40.0616C20.5623 40.9125 21.5873 41.3862 22.1955 40.7881L28.8784 34.2166L41.0954 43.4649C42.4122 44.4619 44.319 43.7592 44.6743 42.1462L53.181 3.52121C53.6662 1.31777 51.5072 -0.541559 49.4001 0.265366L1.84622 18.475C0.35447 19.0463 0.395102 21.1706 1.90766 21.6842Z" /> </svg>',
            ],
            [
                'title'    => 'Behance',
                'subtitle' => 'A wide visibility',
                'key'      => 'behance',
                'link'     => '#',
                'icon'     => '<svg width="54" height="34" viewBox="0 0 54 34" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M27.5018 23.0206V20.9609C27.5018 17.6598 24.8344 15.019 21.5598 15.019L22.8538 14.121C24.9665 12.695 26.234 10.2918 26.234 7.75669C26.234 5.69675 25.4155 3.84808 24.0686 2.52765C22.7481 1.18091 20.8996 0.362305 18.8397 0.362305H0.75V32.8446H17.6778C23.0914 32.8447 27.5018 28.4343 27.5018 23.0206ZM7.64256 5.74963H16.014C18.074 5.74963 19.7377 7.41337 19.7377 9.47308C19.7377 11.533 18.074 13.1968 16.014 13.1968H7.64256V5.74963ZM7.64256 27.6422V18.3201H16.3574C18.9454 18.3201 21.0317 20.4062 21.0317 22.968C21.0317 25.5559 18.9454 27.6422 16.3574 27.6422H7.64256Z" /> <path d="M41.2872 8.5752C34.6851 8.5752 29.3242 14.1738 29.3242 21.0928C29.3242 28.0117 34.6851 33.6369 41.2872 33.6369C46.4368 33.6369 50.847 30.2038 52.5107 25.3973H46.7273C45.3278 28.8833 41.2872 28.3023 41.2872 28.3023C35.6886 27.8798 35.8999 22.5188 35.8999 22.5188H53.171C53.2238 22.0434 53.2503 21.5681 53.2503 21.0927C53.2503 14.1738 47.8893 8.5752 41.2872 8.5752ZM36.4017 18.3199C36.4017 15.4942 38.6992 13.1967 41.5249 13.1967C44.3769 13.1967 46.6746 15.4942 46.6746 18.3199H36.4017Z" /> <path d="M34.7812 2.5625H48.2213V5.74625H34.7812V2.5625Z" /> </svg>',
            ],
            [
                'title'    => 'X',
                'subtitle' => 'Latest news and updates',
                'key'      => 'twitter',
                'link'     => '#',
                'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 462.799"><path fill="#fff" fill-rule="nonzero" d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z"/></svg>',
            ],
            [
                'title'    => 'Instagram',
                'subtitle' => 'Share your photos',
                'key'      => 'instagram',
                'link'     => '#',
                'icon'     => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="54" height="54" stroke-width="1.5"> <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path> <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path> <path d="M16.5 7.5l0 .01"></path> </svg>',
            ],
            [
                'title'    => 'Facebook',
                'subtitle' => 'The most popular social media',
                'key'      => 'facebook',
                'link'     => '#',
                'icon'     => '<svg width="54" height="54" viewBox="0 0 54 54" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M27 0C12.087 0 0 12.087 0 27C0 40.5 10.5 51 24 54V35.1H17.1V27H24V21.6C24 16.2 27.9 13.5 32.4 13.5C34.2 13.5 36 13.8 36 13.8V20.7H33.3C30.6 20.7 30 22.5 30 24V27H36L35.1 35.1H30V54C43.5 51 54 40.5 54 27C54 12.087 41.913 0 27 0Z" /> </svg>',
            ],
        ];

        foreach ($socials as $social) {
            $this->createSocial(...$social);
        }
    }

    private function createSocial(string $title, string $subtitle, string $key, string $link, string $icon): void
    {
        SocialMediaAccounts::query()
            ->firstOrCreate([
                'key' => $key,
            ], [
                'title'     => $title,
                'subtitle'  => $subtitle,
                'key'       => $key,
                'link'      => $link,
                'icon'      => $icon,
                'is_active' => true,
            ]);
    }
}
