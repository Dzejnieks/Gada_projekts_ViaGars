<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* {# inline_template_start #}<a href="{{ view_node }}" class="event-card-link">
{{ field_date }}
<div class="event-teaser-card">
<div class="event-info-wrapper">
{{ field_date_1 }}
<h2>{{ title }}</h2>
{{ body }} 
</div>
</div>
</a>
 */
class __TwigTemplate_0eded8d1c5753323a6439fa7ee0572e8a7fa6c8f11969e2b25ee5ec448cb6812 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true);
        echo "\" class=\"event-card-link\">
";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_date"] ?? null)), "html", null, true);
        echo "
<div class=\"event-teaser-card\">
<div class=\"event-info-wrapper\">
";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_date_1"] ?? null)), "html", null, true);
        echo "
<h2>";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h2>
";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo " 
</div>
</div>
</a>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"{{ view_node }}\" class=\"event-card-link\">
{{ field_date }}
<div class=\"event-teaser-card\">
<div class=\"event-info-wrapper\">
{{ field_date_1 }}
<h2>{{ title }}</h2>
{{ body }} 
</div>
</div>
</a>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 7,  80 => 6,  76 => 5,  70 => 2,  65 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<a href=\"{{ view_node }}\" class=\"event-card-link\">
{{ field_date }}
<div class=\"event-teaser-card\">
<div class=\"event-info-wrapper\">
{{ field_date_1 }}
<h2>{{ title }}</h2>
{{ body }} 
</div>
</div>
</a>
", "{# inline_template_start #}<a href=\"{{ view_node }}\" class=\"event-card-link\">
{{ field_date }}
<div class=\"event-teaser-card\">
<div class=\"event-info-wrapper\">
{{ field_date_1 }}
<h2>{{ title }}</h2>
{{ body }} 
</div>
</div>
</a>
", "");
    }
}
