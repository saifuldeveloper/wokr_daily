<?php

namespace Spatie\GoogleFonts\Commands;

use Illuminate\Console\Command;
use Spatie\GoogleFonts\GoogleFonts;

class FetchGoogleFontsCommand extends Command
{
    public $signature   = 'google-fonts:fetch';

    public $description = 'Fetch Google Fonts and store them on a local disk';

    public function handle()
    {
        $this->info('Start fetching Google Fonts...');

        $config                                              = config('google-fonts');
        $config['fonts'][strtolower(setting('header_font'))] = setting('header_font_url');

        if (setting('header_font') != setting('body_font')) {
            $config['fonts'][strtolower(setting('body_font'))] = setting('body_font_url');
        }

        config(['google-fonts' => $config]);

        collect(config('google-fonts.fonts'))
            ->keys()
            ->each(function (string $font) {
                $this->info("Fetching `{$font}`...");

                app(GoogleFonts::class)->load(compact('font'), forceDownload: true);
            });

        $this->info('All done!');
    }
}
