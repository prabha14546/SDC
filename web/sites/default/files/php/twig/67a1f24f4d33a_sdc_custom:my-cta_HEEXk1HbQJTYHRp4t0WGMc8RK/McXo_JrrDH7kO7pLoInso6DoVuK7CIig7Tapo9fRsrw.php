<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* sdc_custom:my-cta */
class __TwigTemplate_1fd619b4c75b26c22e1ae05d786cab26 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- 🥜 Component start: sdc_custom:my-cta -->";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.sdc_custom--my-cta"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "sdc_custom:my-cta"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "sdc_custom:my-cta"));
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["target"] ?? null))) {
            // line 2
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["target", ($context["target"] ?? null)], "method", false, false, true, 2);
        }
        // line 4
        yield "<a
  ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["my-cta"], "method", false, false, true, 5), "html", null, true);
        yield "
  ";
        // line 6
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["href"] ?? null))) {
            // line 7
            yield "    href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["href"] ?? null), "html", null, true);
            yield "\"
  ";
        }
        // line 9
        yield ">
  ";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
        yield "
</a>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["target", "href", "text"]);        // line 1
        yield "<!-- 🥜 Component end: sdc_custom:my-cta -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sdc_custom:my-cta";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  78 => 1,  72 => 10,  69 => 9,  63 => 7,  61 => 6,  57 => 5,  54 => 4,  50 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if target is not empty %}
  {% set attributes = attributes.setAttribute('target', target) %}
{% endif %}
<a
  {{ attributes.addClass('my-cta') }}
  {% if href is not empty %}
    href=\"{{ href }}\"
  {% endif %}
>
  {{ text }}
</a>
", "sdc_custom:my-cta", "themes/custom/sdc_custom/components/my-cta/my-cta.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
