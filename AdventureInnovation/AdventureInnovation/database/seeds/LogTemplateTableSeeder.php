<?php

use Illuminate\Database\Seeder;
use App\Models\LogTemplate;

class LogTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = new LogTemplate();

        $template->name="notes textarea";
        $template->description="A text area for notes about the trip";
        $template->html_data="<div class=\"row\"><div class=\"col-sm-12\"></div><div class=\"col-sm-12\"><div class=\"form-group\"><label for=\"Extra notes\">Extra notes</label><textarea rows=\"5\" class=\"form-control\" id=\"Extra notes\" placeholder=\"notes\"></textarea></div></div></div>";
        $template->save();
    }
}
