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

/* {# inline_template_start #}{% set foo = ["Jan", "Feb", "Mar", "Apr", "Mai", "Jūn", "Jūl", "Aug", "Sep", "Okt", "Nov", "Dec"] %}


<div class="event-date">
  {{ field_date__value|date("d") }}
  <span>{{foo[field_date__value|date("m")|number_format]}} {{ field_date__value|date("Y") }}</span>
</div> */
class __TwigTemplate_bd13a4ace9e21057699f0dd52de7f3294914cf43046ac70d9c7988beb2da1296 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1];
        $filters = ["date" => 5, "number_format" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['date', 'number_format'],
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
        $context["foo"] = [0 => "Jan", 1 => "Feb", 2 => "Mar", 3 => "Apr", 4 => "Mai", 5 => "Jūn", 6 => "Jūl", 7 => "Aug", 8 => "Sep", 9 => "Okt", 10 => "Nov", 11 => "Dec"];
        // line 2
        echo "

<div class=\"event-date\">
  ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_date__value"] ?? null)), "d"), "html", null, true);
        echo "
  <span>";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["foo"] ?? null), twig_number_format_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_date__value"] ?? null)), "m")), [], "array")), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_date__value"] ?? null)), "Y"), "html", null, true);
        echo "</span>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% set foo = [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"Mai\", \"Jūn\", \"Jūl\", \"Aug\", \"Sep\", \"Okt\", \"Nov\", \"Dec\"] %}


<div class=\"event-date\">
  {{ field_date__value|date(\"d\") }}
  <span>{{foo[field_date__value|date(\"m\")|number_format]}} {{ field_date__value|date(\"Y\") }}</span>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  68 => 5,  63 => 2,  61 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}{% set foo = [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"Mai\", \"Jūn\", \"Jūl\", \"Aug\", \"Sep\", \"Okt\", \"Nov\", \"Dec\"] %}


<div class=\"event-date\">
  {{ field_date__value|date(\"d\") }}
  <span>{{foo[field_date__value|date(\"m\")|number_format]}} {{ field_date__value|date(\"Y\") }}</span>
</div>", "{# inline_template_start #}{% set foo = [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"Mai\", \"Jūn\", \"Jūl\", \"Aug\", \"Sep\", \"Okt\", \"Nov\", \"Dec\"] %}


<div class=\"event-date\">
  {{ field_date__value|date(\"d\") }}
  <span>{{foo[field_date__value|date(\"m\")|number_format]}} {{ field_date__value|date(\"Y\") }}</span>
</div>", "");
    }
}
