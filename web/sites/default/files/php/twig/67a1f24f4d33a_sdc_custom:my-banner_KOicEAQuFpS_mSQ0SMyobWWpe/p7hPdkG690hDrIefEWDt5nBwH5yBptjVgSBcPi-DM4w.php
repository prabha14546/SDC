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

/* sdc_custom:my-banner */
class __TwigTemplate_b3b6ab75e44367286c021dad0135c82e extends Template
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
            'banner_body' => [$this, 'block_banner_body'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- 🥟 Component start: sdc_custom:my-banner -->";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.sdc_custom--my-banner"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "sdc_custom:my-banner"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "sdc_custom:my-banner"));
        // line 2
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["image"] ?? null))) {
            // line 3
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["style", (("background-image: linear-gradient(to right, black, black, rgba(0, 0, 0, 70%), transparent), url(\"" . Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null)))), "")) . "\");")], "method", false, false, true, 3);
        }
        // line 5
        yield "
";
        // line 7
        yield "<div ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["my-banner"], "method", false, false, true, 7), "html", null, true);
        yield ">
  <div class=\"my-banner--header\">
    <h3>";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading"] ?? null), "html", null, true);
        yield "</h3>
    ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["ctaText"] ?? null))) {
            // line 11
            yield "      ";
            yield from $this->loadTemplate("sdc_custom:my-cta", "sdc_custom:my-banner", 11)->unwrap()->yield(CoreExtension::toArray(["text" => ((array_key_exists("ctaText", $context)) ? (Twig\Extension\CoreExtension::default(($context["ctaText"] ?? null), "")) : ("")), "href" => ($context["ctaHref"] ?? null), "target" => ((array_key_exists("ctaTarget", $context)) ? (Twig\Extension\CoreExtension::default(($context["ctaTarget"] ?? null), "")) : (""))]));
            // line 12
            yield "    ";
        }
        // line 13
        yield "  </div>
  <div class=\"my-banner--body\">
    ";
        // line 15
        yield from $this->unwrap()->yieldBlock('banner_body', $context, $blocks);
        // line 17
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["image", "heading", "ctaText", "ctaHref", "ctaTarget"]);        // line 1
        yield "<!-- 🥟 Component end: sdc_custom:my-banner -->";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_banner_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sdc_custom:my-banner";
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
        return array (  100 => 16,  93 => 15,  88 => 1,  83 => 17,  81 => 15,  77 => 13,  74 => 12,  71 => 11,  69 => 10,  65 => 9,  59 => 7,  56 => 5,  52 => 3,  50 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Prepare presentational attributes #}
{% if image is not empty %}
  {% set attributes = attributes.setAttribute('style', 'background-image: linear-gradient(to right, black, black, rgba(0, 0, 0, 70%), transparent), url(\"' ~ image|render|striptags|trim|default('') ~ '\");') %}
{% endif %}

{# Markup for the component #}
<div {{ attributes.addClass('my-banner') }}>
  <div class=\"my-banner--header\">
    <h3>{{ heading }}</h3>
    {% if ctaText is not empty %}
      {% include 'sdc_custom:my-cta' with { text: ctaText|default(''), href: ctaHref, target: ctaTarget|default('') } only %}
    {% endif %}
  </div>
  <div class=\"my-banner--body\">
    {% block banner_body %}
    {% endblock %}
  </div>
</div>
", "sdc_custom:my-banner", "themes/custom/sdc_custom/components/my-banner/my-banner.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "set" => 3, "include" => 11, "block" => 15);
        static $filters = array("default" => 3, "trim" => 3, "striptags" => 3, "render" => 3, "escape" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include', 'block'],
                ['default', 'trim', 'striptags', 'render', 'escape'],
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
