<?php

/* core/themes/classy/templates/views/views-view-grid.html.twig */
class __TwigTemplate_ee0a1e53ad2e7d8c3b81d127a0d77f2a7a710afbe25ea67be6d8e4e00f5a5582 extends Twig_Template
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
        // line 28
        $context["classes"] = array(0 => "views-view-grid", 1 => $this->getAttribute(        // line 30
(isset($context["options"]) ? $context["options"] : null), "alignment", array()), 2 => ("cols-" . $this->getAttribute(        // line 31
(isset($context["options"]) ? $context["options"] : null), "columns", array())), 3 => "clearfix");
        // line 35
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "row_class_default", array())) {
            // line 36
            echo "  ";
            // line 37
            $context["row_classes"] = array(0 => "views-row", 1 => ((($this->getAttribute(            // line 39
(isset($context["options"]) ? $context["options"] : null), "alignment", array()) == "horizontal")) ? ("clearfix") : ("")));
        }
        // line 43
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "col_class_default", array())) {
            // line 44
            echo "  ";
            // line 45
            $context["col_classes"] = array(0 => "views-col", 1 => ((($this->getAttribute(            // line 47
(isset($context["options"]) ? $context["options"] : null), "alignment", array()) == "vertical")) ? ("clearfix") : ("")));
        }
        // line 51
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 52
            echo "  <h3>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>
";
        }
        // line 54
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 55
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "alignment", array()) == "horizontal")) {
            // line 56
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 57
                echo "      <div";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null), 1 => (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "row_class_default", array())) ? (("row-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true);
                echo ">
        ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 59
                    echo "          <div";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["col_classes"]) ? $context["col_classes"] : null), 1 => (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "col_class_default", array())) ? (("col-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true);
                    echo ">
            ";
                    // line 60
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true);
                    echo "
          </div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "  ";
        } else {
            // line 66
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 67
                echo "      <div";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["col_classes"]) ? $context["col_classes"] : null), 1 => (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "col_class_default", array())) ? (("col-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true);
                echo ">
        ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 69
                    echo "          <div";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null), 1 => (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "row_class_default", array())) ? (("row-" . $this->getAttribute($context["loop"], "index", array()))) : (""))), "method"), "html", null, true);
                    echo ">
            ";
                    // line 70
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true);
                    echo "
          </div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "  ";
        }
        // line 76
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 76,  211 => 75,  196 => 73,  179 => 70,  174 => 69,  157 => 68,  152 => 67,  134 => 66,  131 => 65,  116 => 63,  99 => 60,  94 => 59,  77 => 58,  72 => 57,  54 => 56,  52 => 55,  47 => 54,  41 => 52,  39 => 51,  36 => 47,  35 => 45,  33 => 44,  31 => 43,  28 => 39,  27 => 37,  25 => 36,  23 => 35,  21 => 31,  20 => 30,  19 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for views to display rows in a grid.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapping element.*/
/*  * - title: The title of this group of rows.*/
/*  * - view: The view object.*/
/*  * - rows: The rendered view results.*/
/*  * - options: The view plugin style options.*/
/*  *   - row_class_default: A flag indicating whether default classes should be*/
/*  *     used on rows.*/
/*  *   - col_class_default: A flag indicating whether default classes should be*/
/*  *     used on columns.*/
/*  * - items: A list of grid items. Each item contains a list of rows or columns.*/
/*  *   The order in what comes first (row or column) depends on which alignment*/
/*  *   type is chosen (horizontal or vertical).*/
/*  *   - attributes: HTML attributes for each row or column.*/
/*  *   - content: A list of columns or rows. Each row or column contains:*/
/*  *     - attributes: HTML attributes for each row or column.*/
/*  *     - content: The row or column contents.*/
/*  **/
/*  * @see template_preprocess_views_view_grid()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'views-view-grid',*/
/*     options.alignment,*/
/*     'cols-' ~ options.columns,*/
/*     'clearfix',*/
/*   ]*/
/* %}*/
/* {% if options.row_class_default %}*/
/*   {%*/
/*     set row_classes = [*/
/*       'views-row',*/
/*       options.alignment == 'horizontal' ? 'clearfix',*/
/*     ]*/
/*   %}*/
/* {% endif %}*/
/* {% if options.col_class_default %}*/
/*   {%*/
/*     set col_classes = [*/
/*       'views-col',*/
/*       options.alignment == 'vertical' ? 'clearfix',*/
/*     ]*/
/*   %}*/
/* {% endif %}*/
/* {% if title %}*/
/*   <h3>{{ title }}</h3>*/
/* {% endif %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if options.alignment == 'horizontal' %}*/
/*     {% for row in items %}*/
/*       <div{{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>*/
/*         {% for column in row.content %}*/
/*           <div{{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>*/
/*             {{ column.content }}*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% else %}*/
/*     {% for column in items %}*/
/*       <div{{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>*/
/*         {% for row in column.content %}*/
/*           <div{{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>*/
/*             {{ row.content }}*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* </div>*/
/* */
