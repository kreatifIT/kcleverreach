<?php

/**
 * @author Kreatif GmbH
 * @author a.platter@kreatif.it
 * Date: 31.03.21
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace kcleverreach;


class MyContent
{

    public static function getFilters()
    {
        $filters             = false;
        $filter              = false;
        $filter->name        = "Category";    # short description
        $filter->description = "Basic dropdown example. Doesnt actualy filter anything.";
        $filter->required    = false;
        $filter->query_key   = "category";    # query key which will be used in form GET to query this filter
        $filter->type        = "dropdown";            # dropdown, input;
        $filter->values      = [
            ["text" => "", "value" => ""],
            ["text" => "cat 1", "value" => 1],
            ["text" => "cat 2", "value" => 2],
            ["text" => "cat 3", "value" => 3],
            ["text" => "&nbsp;&nbsp;&nbsp;subcat 1", "value" => 4],
        ];
        $filters[]           = $filter;

        $filter              = false;
        $filter->name        = "Product";
        $filter->description = "Basic example. Doesnt actualy filter anything either.";
        $filter->required    = false;
        $filter->query_key   = "product";
        $filter->type        = "input";
        $filters[]           = $filter;
        return $filters;
    }

    public static function getSearchResults()
    {
        $items                                = false;
        $items->settings->type                = "product"; // product | rss | content > description
        $items->settings->link_editable       = false;
        $items->settings->link_text_editable  = false;
        $items->settings->image_size_editable = false;

        $out              = false;
        $out->title       = "Batman";
        $out->description = "Batman and Robin battle the combined forces of four supercriminals who have stolen an invention and intend to use it maliciously.";
        //$out->content = "<b>preformated text</b>";
        $out->image        = "http://ecx.images-amazon.com/images/I/51P7GPFd8NL._SX500_.jpg";
        $out->price        = "$8.49";
        $out->display_info = "additional info text";
        $out->url          = "http://www.amazon.com/Batman/dp/B000N54NGO/ref=sr_1_15?ie=UTF8&qid=1335258671&sr=8-15";
        $items->items[]    = $out;

        $out              = false;
        $out->title       = "DC Direct Batman: Arkham City: Series 1: Batman Action Figure";
        $out->description = 'Welcome to Arkham City, the new maximum security â€œhomeâ€ for all of Gotham Cityâ€™s thugs, gangsters, and insane criminal masterminds. Set inside the heavily fortified walls of a sprawling district in the heart of Gotham City, itâ€™s filled with the most murderous villains from DC Comicsâ€™ Batman universe. But Batman is ready to tackle it with all-new gadgets and his greatestâ€”and most dangerousâ€”allies. Which is good, because heâ€™ll need all the help he can get for his journey into the darkest corners of Gotham. Among those heâ€™ll encounter: Tim Drake battles crime as Robin, delivering punches (and signature quips) to aid in the Caped Crusaderâ€™s mission to shut down Arkham City. In a nice new outfit, Harley Quinn has taken to the front lines to personally fulfill the Jokerâ€™s sickest wishes of mischief and mayhem. Sheâ€™s not going to let anyone get in her wayâ€”least of all Batman. Based on the upcoming blockbuster video game published by Warner Bros. Interactive Entertainment, developed by Rocksteady Studios, and licensed by DC Entertainment';
        $out->image       = "http://ecx.images-amazon.com/images/I/41fR%2Bl-cb5L._SL500_AA300_.jpg";
        $out->price       = "$18.95";
        $out->url         = "http://www.amazon.com/DC-Direct-Batman-Arkham-Series/dp/B005UH6HOG";
        $items->items[]   = $out;
        return $items;
    }
}