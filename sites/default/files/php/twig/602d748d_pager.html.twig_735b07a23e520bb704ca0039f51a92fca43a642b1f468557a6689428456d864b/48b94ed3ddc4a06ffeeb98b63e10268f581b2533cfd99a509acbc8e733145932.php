<?php

/* core/themes/classy/templates/navigation/pager.html.twig */
class __TwigTemplate_452e932416bebb6f6969c9b4a9773681d16969c832f9ad0e7193f70aae093761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 32
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 33
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            echo $this->env->getExtension('drupal_core')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 37
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array())) {
                // line 38
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 39
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "attributes", array()), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 40
                echo $this->env->getExtension('drupal_core')->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 41
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array()), t("« first"))) : (t("« first"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 45
            echo "      ";
            // line 46
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 47
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 48
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 49
                echo $this->env->getExtension('drupal_core')->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 50
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹ previous"))) : (t("‹ previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 54
            echo "      ";
            // line 55
            echo "      ";
            if ($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "previous", array())) {
                // line 56
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 58
            echo "      ";
            // line 59
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "pages", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 60
                echo "        <li class=\"pager__item";
                echo $this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (" is-active") : ("")));
                echo "\">
          ";
                // line 61
                if (((isset($context["current"]) ? $context["current"] : null) == $context["key"])) {
                    // line 62
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 63
                    echo "          ";
                } else {
                    // line 64
                    echo "            ";
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                    // line 65
                    echo "          ";
                }
                // line 66
                echo "          <a href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($context["item"], "attributes", array()), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 68
                echo $this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 70
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true);
                // line 71
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      ";
            // line 75
            echo "      ";
            if ($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "next", array())) {
                // line 76
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 78
            echo "      ";
            // line 79
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 80
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 81
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 82
                echo $this->env->getExtension('drupal_core')->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 83
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("next ›"))) : (t("next ›"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 87
            echo "      ";
            // line 88
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array())) {
                // line 89
                echo "        <li class=\"pager__item pager__item--last\">
          <a href=\"";
                // line 90
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "href", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "attributes", array()), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 91
                echo $this->env->getExtension('drupal_core')->renderVar(t("Last page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 92
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array()), t("last »"))) : (t("last »"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 96
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 96,  196 => 92,  192 => 91,  184 => 90,  181 => 89,  178 => 88,  176 => 87,  169 => 83,  165 => 82,  157 => 81,  154 => 80,  151 => 79,  149 => 78,  145 => 76,  142 => 75,  140 => 74,  132 => 71,  130 => 70,  126 => 68,  116 => 66,  113 => 65,  110 => 64,  107 => 63,  104 => 62,  102 => 61,  97 => 60,  92 => 59,  90 => 58,  86 => 56,  83 => 55,  81 => 54,  74 => 50,  70 => 49,  62 => 48,  59 => 47,  56 => 46,  54 => 45,  47 => 41,  43 => 40,  35 => 39,  32 => 38,  29 => 37,  24 => 34,  21 => 33,  19 => 32,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a pager.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  *   The list is keyed by the following elements:*/
/*  *   - first: Item for the first page; not present on the first page of results.*/
/*  *   - previous: Item for the previous page; not present on the first page*/
/*  *     of results.*/
/*  *   - next: Item for the next page; not present on the last page of results.*/
/*  *   - last: Item for the last page; not present on the last page of results.*/
/*  *   - pages: List of pages, keyed by page number.*/
/*  *   Sub-sub elements:*/
/*  *   items.first, items.previous, items.next, items.last, and each item inside*/
/*  *   items.pages contain the following elements:*/
/*  *   - href: URL with appropriate query parameters for the item.*/
/*  *   - attributes: A keyed list of HTML attributes for the item.*/
/*  *   - text: The visible text used for the item link, such as "‹ previous"*/
/*  *     or "next ›".*/
/*  * - current: The page number of the current page.*/
/*  * - ellipses: If there are more pages than the quantity allows, then an*/
/*  *   ellipsis before or after the listed pages may be present.*/
/*  *   - previous: Present if the currently visible list of pages does not start*/
/*  *     at the first page.*/
/*  *   - next: Present if the visible list of pages ends before the last page.*/
/*  **/
/*  * @see template_preprocess_pager()*/
/*  *//* */
/* #}*/
/* {% if items %}*/
/*   <nav class="pager" role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 id="pagination-heading" class="visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="pager__items js-pager__items">*/
/*       {# Print first item if we are not on the first page. #}*/
/*       {% if items.first %}*/
/*         <li class="pager__item pager__item--first">*/
/*           <a href="{{ items.first.href }}" title="{{ 'Go to first page'|t }}"{{ items.first.attributes|without('href', 'title') }}>*/
/*             <span class="visually-hidden">{{ 'First page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.first.text|default('« first'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*       {# Print previous item if we are not on the first page. #}*/
/*       {% if items.previous %}*/
/*         <li class="pager__item pager__item--previous">*/
/*           <a href="{{ items.previous.href }}" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes|without('href', 'title', 'rel') }}>*/
/*             <span class="visually-hidden">{{ 'Previous page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.previous.text|default('‹ previous'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*       {# Add an ellipsis if there are further previous pages. #}*/
/*       {% if ellipses.previous %}*/
/*         <li class="pager__item pager__item--ellipsis" role="presentation">&hellip;</li>*/
/*       {% endif %}*/
/*       {# Now generate the actual pager piece. #}*/
/*       {% for key, item in items.pages %}*/
/*         <li class="pager__item{{ current == key ? ' is-active' : '' }}">*/
/*           {% if current == key %}*/
/*             {% set title = 'Current page'|t %}*/
/*           {% else %}*/
/*             {% set title = 'Go to page @key'|t({'@key': key}) %}*/
/*           {% endif %}*/
/*           <a href="{{ item.href }}" title="{{ title }}"{{ item.attributes|without('href', 'title') }}>*/
/*             <span class="visually-hidden">*/
/*               {{ current == key ? 'Current page'|t : 'Page'|t }}*/
/*             </span>*/
/*             {{- key -}}*/
/*           </a>*/
/*         </li>*/
/*       {% endfor %}*/
/*       {# Add an ellipsis if there are further next pages. #}*/
/*       {% if ellipses.next %}*/
/*         <li class="pager__item pager__item--ellipsis" role="presentation">&hellip;</li>*/
/*       {% endif %}*/
/*       {# Print next item if we are not on the last page. #}*/
/*       {% if items.next %}*/
/*         <li class="pager__item pager__item--next">*/
/*           <a href="{{ items.next.href }}" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes|without('href', 'title', 'rel') }}>*/
/*             <span class="visually-hidden">{{ 'Next page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.next.text|default('next ›'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*       {# Print last item if we are not on the last page. #}*/
/*       {% if items.last %}*/
/*         <li class="pager__item pager__item--last">*/
/*           <a href="{{ items.last.href }}" title="{{ 'Go to last page'|t }}"{{ items.last.attributes|without('href', 'title') }}>*/
/*             <span class="visually-hidden">{{ 'Last page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.last.text|default('last »'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */