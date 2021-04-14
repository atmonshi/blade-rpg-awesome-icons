<?php

declare(strict_types=1);

namespace Tests;

use Orchestra\Testbench\TestCase;
use BladeUI\Icons\BladeIconsServiceProvider;
use Codeat3\BladeRPGAwesomeIcons\BladeRPGAwesomeIconsServiceProvider;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('rpg-acid')->toHtml();

        // Note: the empty class here seems to be a Blade components bug.
        $expected = <<<'SVG'
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" enable-background="new 0 0 612 612" xml:space="preserve" fill="currentColor"><g transform="matrix(15 0 0 15 -7004 -6649.4327)"><g><path d="M482.552,458.914c1.195,0,2.391,1.195,4.781,1.195s3.586-1.195,4.781-1.195c3.586,0,1.195,2.391,0,3.586c0,11.953,9.563,17.93,9.563,20.32H472.99c0-2.391,9.563-8.367,9.563-20.32C481.357,461.305,478.966,458.914,482.552,458.914z"/><path d="M488.529,457.719c0,0.66-0.535,1.195-1.195,1.195s-1.195-0.535-1.195-1.195s0.535-1.195,1.195-1.195C487.993,456.523,488.529,457.059,488.529,457.719z"/><path d="M489.724,446.961c0,1.32-1.07,2.391-2.391,2.391c-1.32,0-2.391-1.07-2.391-2.391c0-1.32,1.07-2.391,2.391-2.391C488.654,444.571,489.724,445.641,489.724,446.961z"/><path d="M486.138,452.938c0,1.32-1.07,2.391-2.391,2.391s-2.391-1.07-2.391-2.391c0-1.32,1.07-2.391,2.391-2.391S486.138,451.617,486.138,452.938z"/><path d="M490.919,454.133c0,0.66-0.535,1.195-1.195,1.195s-1.195-0.535-1.195-1.195s0.535-1.195,1.195-1.195S490.919,453.473,490.919,454.133z"/></g></g></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('rpg-acid', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
            <svg class="w-6 h-6 text-gray-500" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" enable-background="new 0 0 612 612" xml:space="preserve" fill="currentColor"><g transform="matrix(15 0 0 15 -7004 -6649.4327)"><g><path d="M482.552,458.914c1.195,0,2.391,1.195,4.781,1.195s3.586-1.195,4.781-1.195c3.586,0,1.195,2.391,0,3.586c0,11.953,9.563,17.93,9.563,20.32H472.99c0-2.391,9.563-8.367,9.563-20.32C481.357,461.305,478.966,458.914,482.552,458.914z"/><path d="M488.529,457.719c0,0.66-0.535,1.195-1.195,1.195s-1.195-0.535-1.195-1.195s0.535-1.195,1.195-1.195C487.993,456.523,488.529,457.059,488.529,457.719z"/><path d="M489.724,446.961c0,1.32-1.07,2.391-2.391,2.391c-1.32,0-2.391-1.07-2.391-2.391c0-1.32,1.07-2.391,2.391-2.391C488.654,444.571,489.724,445.641,489.724,446.961z"/><path d="M486.138,452.938c0,1.32-1.07,2.391-2.391,2.391s-2.391-1.07-2.391-2.391c0-1.32,1.07-2.391,2.391-2.391S486.138,451.617,486.138,452.938z"/><path d="M490.919,454.133c0,0.66-0.535,1.195-1.195,1.195s-1.195-0.535-1.195-1.195s0.535-1.195,1.195-1.195S490.919,453.473,490.919,454.133z"/></g></g></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('rpg-acid', ['style' => 'color: #555'])->toHtml();

        $expected = <<<'SVG'
            <svg style="color: #555" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" enable-background="new 0 0 612 612" xml:space="preserve" fill="currentColor"><g transform="matrix(15 0 0 15 -7004 -6649.4327)"><g><path d="M482.552,458.914c1.195,0,2.391,1.195,4.781,1.195s3.586-1.195,4.781-1.195c3.586,0,1.195,2.391,0,3.586c0,11.953,9.563,17.93,9.563,20.32H472.99c0-2.391,9.563-8.367,9.563-20.32C481.357,461.305,478.966,458.914,482.552,458.914z"/><path d="M488.529,457.719c0,0.66-0.535,1.195-1.195,1.195s-1.195-0.535-1.195-1.195s0.535-1.195,1.195-1.195C487.993,456.523,488.529,457.059,488.529,457.719z"/><path d="M489.724,446.961c0,1.32-1.07,2.391-2.391,2.391c-1.32,0-2.391-1.07-2.391-2.391c0-1.32,1.07-2.391,2.391-2.391C488.654,444.571,489.724,445.641,489.724,446.961z"/><path d="M486.138,452.938c0,1.32-1.07,2.391-2.391,2.391s-2.391-1.07-2.391-2.391c0-1.32,1.07-2.391,2.391-2.391S486.138,451.617,486.138,452.938z"/><path d="M490.919,454.133c0,0.66-0.535,1.195-1.195,1.195s-1.195-0.535-1.195-1.195s0.535-1.195,1.195-1.195S490.919,453.473,490.919,454.133z"/></g></g></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeRPGAwesomeIconsServiceProvider::class,
        ];
    }
}
