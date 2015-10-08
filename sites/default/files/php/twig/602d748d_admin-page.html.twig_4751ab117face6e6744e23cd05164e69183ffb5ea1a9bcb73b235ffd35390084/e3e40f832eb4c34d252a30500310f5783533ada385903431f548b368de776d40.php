<?php

/* core/modules/system/templates/admin-page.html.twig */
class __TwigTemplate_289325281cf591df2996cfb3ab3d5b14192cfe7b9f1f5382bb91de10390f601a extends Twig_Template
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
        // line 17
        echo "<div class=\"clearfix\">
  ";
        // line 18
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["system_compact_link"]) ? $context["system_compact_link"] : null), "html", null, true);
        echo "
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
            // line 20
            echo "    <div class=\"layout-column half\">
      ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["container"], "blocks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 22
                echo "        ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["block"], "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 26,  46 => 24,  37 => 22,  33 => 21,  30 => 20,  26 => 19,  22 => 18,  19 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an administrative page.*/
/*  **/
/*  * Available variables:*/
/*  * - system_compact_link: Themed link to toggle compact view.*/
/*  * - containers: An list of administrative blocks keyed by position: left or*/
/*  *   right. Contains:*/
/*  *   - blocks: A list of blocks within a container.*/
/*  **/
/*  * @see template_preprocess_admin_page()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <div class="clearfix">*/
/*   {{ system_compact_link }}*/
/*   {% for container in containers %}*/
/*     <div class="layout-column half">*/
/*       {% for block in container.blocks %}*/
/*         {{ block }}*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
