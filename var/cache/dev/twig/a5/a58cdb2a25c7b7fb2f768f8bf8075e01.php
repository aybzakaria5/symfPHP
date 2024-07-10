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

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_4d723ed90b43206d67feb6f3dc0b0b76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'messages' => [$this, 'block_messages'],
            'defined_messages' => [$this, 'block_defined_messages'],
            'fallback_messages' => [$this, 'block_fallback_messages'],
            'missing_messages' => [$this, 'block_missing_messages'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, false, 6))) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/translation.svg");
                yield "
            ";
                // line 9
                $context["status_color"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "countMissings", [], "any", false, false, false, 9)) ? ("red") : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "countFallbacks", [], "any", false, false, false, 9)) ? ("yellow") : (""))));
                // line 10
                yield "            ";
                $context["error_count"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "countMissings", [], "any", false, false, false, 10) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "countFallbacks", [], "any", false, false, false, 10));
                // line 11
                yield "            <span class=\"sf-toolbar-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new RuntimeError('Variable "error_count" does not exist.', 11, $this->source); })())) ?: (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "countDefines", [], "any", false, false, false, 11))), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            yield "
        ";
            // line 14
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 15
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Default locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", false, false, false, 18), "-")) : ("-")), "html", null, true);
                yield "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 23
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "countMissings", [], "any", false, false, false, 23)) ? ("red") : (""));
                yield "\">
                    ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "countMissings", [], "any", false, false, false, 24), "html", null, true);
                yield "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 30
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "countFallbacks", [], "any", false, false, false, 30)) ? ("yellow") : (""));
                yield "\">
                    ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "countFallbacks", [], "any", false, false, false, 31), "html", null, true);
                yield "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "countDefines", [], "any", false, false, false, 37), "html", null, true);
                yield "</span>
            </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 40
            yield "
        ";
            // line 41
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 41, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 41, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 45
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        yield "    <span class=\"label label-status-";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "countMissings", [], "any", false, false, false, 46)) ? ("error") : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "countFallbacks", [], "any", false, false, false, 46)) ? ("warning") : (""))));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "messages", [], "any", false, false, false, 46))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 47
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/translation.svg");
        yield "</span>
        <strong>Translation</strong>
        ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "countMissings", [], "any", false, false, false, 49) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "countFallbacks", [], "any", false, false, false, 49))) {
            // line 50
            yield "            ";
            $context["error_count"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "countMissings", [], "any", false, false, false, 50) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "countFallbacks", [], "any", false, false, false, 50));
            // line 51
            yield "            <span class=\"count\">
                <span>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error_count"]) || array_key_exists("error_count", $context) ? $context["error_count"] : (function () { throw new RuntimeError('Variable "error_count" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 55
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 58
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        yield "    <h2>Translation</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "locale", [], "any", false, false, false, 63), "-")) : ("-")), "html", null, true);
        yield "</span>
            <span class=\"label\">Default locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "fallbackLocales", [], "any", false, false, false, 67), ", "), "-"), "html", null, true);
        yield "</span>
            <span class=\"label\">Fallback locale";
        // line 68
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "fallbackLocales", [], "any", false, false, false, 68)) != 1)) ? ("s") : (""));
        yield "</span>
        </div>
    </div>

    <h2>Messages</h2>

    ";
        // line 74
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "messages", [], "any", false, false, false, 74))) {
            // line 75
            yield "        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 79
            yield "        ";
            yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
            // line 161
            yield "    ";
        }
        // line 162
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 79
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 80
        yield "
        ";
        // line 82
        yield "        ";
        [$context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]] =         [[], [], []];
        // line 83
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "messages", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 84) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 85
                yield "                ";
                $context["messages_defined"] = Twig\Extension\CoreExtension::merge((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new RuntimeError('Variable "messages_defined" does not exist.', 85, $this->source); })()), [$context["message"]]);
                // line 86
                yield "            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 86) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 87
                yield "                ";
                $context["messages_missing"] = Twig\Extension\CoreExtension::merge((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new RuntimeError('Variable "messages_missing" does not exist.', 87, $this->source); })()), [$context["message"]]);
                // line 88
                yield "            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "state", [], "any", false, false, false, 88) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 89
                yield "                ";
                $context["messages_fallback"] = Twig\Extension\CoreExtension::merge((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new RuntimeError('Variable "messages_fallback" does not exist.', 89, $this->source); })()), [$context["message"]]);
                // line 90
                yield "            ";
            }
            // line 91
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
        <div class=\"sf-tabs\">
            <div class=\"tab ";
        // line 94
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "countMissings", [], "any", false, false, false, 94) == 0)) ? ("active") : (""));
        yield "\">
                <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "countDefines", [], "any", false, false, false, 95), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are correctly translated into the given locale.
                    </p>

                    ";
        // line 102
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new RuntimeError('Variable "messages_defined" does not exist.', 102, $this->source); })()))) {
            // line 103
            yield "                        <div class=\"empty\">
                            <p>None of the used translation messages are defined for the given locale.</p>
                        </div>
                    ";
        } else {
            // line 107
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('defined_messages', $context, $blocks);
            // line 110
            yield "                    ";
        }
        // line 111
        yield "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 115
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 115, $this->source); })()), "countFallbacks", [], "any", false, false, false, 115)) ? ("status-warning") : (""));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 115, $this->source); })()), "countFallbacks", [], "any", false, false, false, 115), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale
                        but Symfony found them in the fallback locale catalog.
                    </p>

                    ";
        // line 123
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new RuntimeError('Variable "messages_fallback" does not exist.', 123, $this->source); })()))) {
            // line 124
            yield "                        <div class=\"empty\">
                            <p>No fallback translation messages were used.</p>
                        </div>
                    ";
        } else {
            // line 128
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('fallback_messages', $context, $blocks);
            // line 131
            yield "                    ";
        }
        // line 132
        yield "                </div>
            </div>

            <div class=\"tab ";
        // line 135
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "countMissings", [], "any", false, false, false, 135) > 0)) ? ("active") : (""));
        yield "\">
                <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 136
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "countMissings", [], "any", false, false, false, 136)) ? ("status-error") : (""));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "countMissings", [], "any", false, false, false, 136), "html", null, true);
        yield "</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale and cannot
                        be found in the fallback locales. Add them to the translation
                        catalogue to avoid Symfony outputting untranslated contents.
                    </p>

                    ";
        // line 145
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new RuntimeError('Variable "messages_missing" does not exist.', 145, $this->source); })()))) {
            // line 146
            yield "                        <div class=\"empty\">
                            <p>There are no messages of this category.</p>
                        </div>
                    ";
        } else {
            // line 150
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('missing_messages', $context, $blocks);
            // line 153
            yield "                    ";
        }
        // line 154
        yield "                </div>
            </div>
        </div>

        <script>Sfjs.createFilters();</script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 107
    public function block_defined_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 108
        yield "                            ";
        yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [(isset($context["messages_defined"]) || array_key_exists("messages_defined", $context) ? $context["messages_defined"] : (function () { throw new RuntimeError('Variable "messages_defined" does not exist.', 108, $this->source); })())], 108, $context, $this->getSourceContext());
        yield "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 128
    public function block_fallback_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 129
        yield "                            ";
        yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [(isset($context["messages_fallback"]) || array_key_exists("messages_fallback", $context) ? $context["messages_fallback"] : (function () { throw new RuntimeError('Variable "messages_fallback" does not exist.', 129, $this->source); })()), true], 129, $context, $this->getSourceContext());
        yield "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 150
    public function block_missing_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 151
        yield "                            ";
        yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [(isset($context["messages_missing"]) || array_key_exists("messages_missing", $context) ? $context["messages_missing"] : (function () { throw new RuntimeError('Variable "messages_missing" does not exist.', 151, $this->source); })())], 151, $context, $this->getSourceContext());
        yield "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 165
    public function macro_render_table($__messages__ = null, $__is_fallback__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "is_fallback" => $__is_fallback__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 166
            yield "    <table data-filters>
        <thead>
            <tr>
                <th data-filter=\"locale\">Locale</th>
                ";
            // line 170
            if ((isset($context["is_fallback"]) || array_key_exists("is_fallback", $context) ? $context["is_fallback"] : (function () { throw new RuntimeError('Variable "is_fallback" does not exist.', 170, $this->source); })())) {
                // line 171
                yield "                    <th>Fallback locale</th>
                ";
            }
            // line 173
            yield "                <th data-filter=\"domain\">Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 180, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 181
                yield "            <tr data-filter-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, false, 181), "html", null, true);
                yield "\" data-filter-domain=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, false, 181), "html", null, true);
                yield "\">
                <td class=\"font-normal text-small nowrap\">";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "locale", [], "any", false, false, false, 182), "html", null, true);
                yield "</td>
                ";
                // line 183
                if ((isset($context["is_fallback"]) || array_key_exists("is_fallback", $context) ? $context["is_fallback"] : (function () { throw new RuntimeError('Variable "is_fallback" does not exist.', 183, $this->source); })())) {
                    // line 184
                    yield "                    <td class=\"font-normal text-small nowrap\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", true, true, false, 184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "fallbackLocale", [], "any", false, false, false, 184), "-")) : ("-")), "html", null, true);
                    yield "</td>
                ";
                }
                // line 186
                yield "                <td class=\"font-normal text-small text-bold nowrap\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "domain", [], "any", false, false, false, 186), "html", null, true);
                yield "</td>
                <td class=\"font-normal text-small nowrap\">";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "count", [], "any", false, false, false, 187), "html", null, true);
                yield "</td>
                <td>
                    <span class=\"nowrap\">";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 189), "html", null, true);
                yield "</span>

                    ";
                // line 191
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["message"], "transChoiceNumber", [], "any", false, false, false, 191))) {
                    // line 192
                    yield "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 194
                yield "
                    ";
                // line 195
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, false, 195)) > 0)) {
                    // line 196
                    yield "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 196), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 198), "html", null, true);
                    yield "\" class=\"hidden\">
                            ";
                    // line 199
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "parameters", [], "any", false, false, false, 199));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 200
                        yield "                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["parameters"], 1);
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    yield "                        </div>
                    ";
                }
                // line 204
                yield "                </td>
                <td class=\"prewrap\">";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "translation", [], "any", false, false, false, 205), "html", null, true);
                yield "</td>
            </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            yield "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  667 => 208,  650 => 205,  647 => 204,  643 => 202,  634 => 200,  630 => 199,  626 => 198,  620 => 196,  618 => 195,  615 => 194,  611 => 192,  609 => 191,  604 => 189,  599 => 187,  594 => 186,  588 => 184,  586 => 183,  582 => 182,  575 => 181,  558 => 180,  549 => 173,  545 => 171,  543 => 170,  537 => 166,  518 => 165,  504 => 151,  494 => 150,  480 => 129,  470 => 128,  456 => 108,  446 => 107,  429 => 154,  426 => 153,  423 => 150,  417 => 146,  415 => 145,  401 => 136,  397 => 135,  392 => 132,  389 => 131,  386 => 128,  380 => 124,  378 => 123,  365 => 115,  359 => 111,  356 => 110,  353 => 107,  347 => 103,  345 => 102,  335 => 95,  331 => 94,  327 => 92,  321 => 91,  318 => 90,  315 => 89,  312 => 88,  309 => 87,  306 => 86,  303 => 85,  300 => 84,  295 => 83,  292 => 82,  289 => 80,  279 => 79,  267 => 162,  264 => 161,  261 => 79,  255 => 75,  253 => 74,  244 => 68,  240 => 67,  233 => 63,  227 => 59,  217 => 58,  205 => 55,  199 => 52,  196 => 51,  193 => 50,  191 => 49,  186 => 47,  179 => 46,  169 => 45,  155 => 41,  152 => 40,  145 => 37,  136 => 31,  132 => 30,  123 => 24,  119 => 23,  111 => 18,  106 => 15,  104 => 14,  101 => 13,  94 => 11,  91 => 10,  89 => 9,  84 => 8,  81 => 7,  78 => 6,  68 => 5,  57 => 1,  55 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countDefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Default locale</b>
                <span class=\"sf-toolbar-status\">
                    {{ collector.locale|default('-') }}
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countDefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Translation</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.locale|default('-') }}</span>
            <span class=\"label\">Default locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.fallbackLocales|join(', ')|default('-') }}</span>
            <span class=\"label\">Fallback locale{{ collector.fallbackLocales|length != 1 ? 's' }}</span>
        </div>
    </div>

    <h2>Messages</h2>

    {% if collector.messages is empty %}
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {% block messages %}

        {# sort translation messages in groups #}
        {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
        {% for message in collector.messages %}
            {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
                {% set messages_defined = messages_defined|merge([message]) %}
            {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
                {% set messages_missing = messages_missing|merge([message]) %}
            {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
                {% set messages_fallback = messages_fallback|merge([message]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab {{ collector.countMissings == 0 ? 'active' }}\">
                <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ collector.countDefines }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are correctly translated into the given locale.
                    </p>

                    {% if messages_defined is empty %}
                        <div class=\"empty\">
                            <p>None of the used translation messages are defined for the given locale.</p>
                        </div>
                    {% else %}
                        {% block defined_messages %}
                            {{ helper.render_table(messages_defined) }}
                        {% endblock %}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Fallback <span class=\"badge {{ collector.countFallbacks ? 'status-warning' }}\">{{ collector.countFallbacks }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale
                        but Symfony found them in the fallback locale catalog.
                    </p>

                    {% if messages_fallback is empty %}
                        <div class=\"empty\">
                            <p>No fallback translation messages were used.</p>
                        </div>
                    {% else %}
                        {% block fallback_messages %}
                            {{ helper.render_table(messages_fallback, true) }}
                        {% endblock %}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.countMissings > 0 ? 'active' }}\">
                <h3 class=\"tab-title\">Missing <span class=\"badge {{ collector.countMissings ? 'status-error' }}\">{{ collector.countMissings }}</span></h3>

                <div class=\"tab-content\">
                    <p class=\"help\">
                        These messages are not available for the given locale and cannot
                        be found in the fallback locales. Add them to the translation
                        catalogue to avoid Symfony outputting untranslated contents.
                    </p>

                    {% if messages_missing is empty %}
                        <div class=\"empty\">
                            <p>There are no messages of this category.</p>
                        </div>
                    {% else %}
                        {% block missing_messages %}
                            {{ helper.render_table(messages_missing) }}
                        {% endblock %}
                    {% endif %}
                </div>
            </div>
        </div>

        <script>Sfjs.createFilters();</script>

        {% endblock messages %}
    {% endif %}

{% endblock %}

{% macro render_table(messages, is_fallback) %}
    <table data-filters>
        <thead>
            <tr>
                <th data-filter=\"locale\">Locale</th>
                {% if is_fallback %}
                    <th>Fallback locale</th>
                {% endif %}
                <th data-filter=\"domain\">Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr data-filter-locale=\"{{ message.locale }}\" data-filter-domain=\"{{ message.domain }}\">
                <td class=\"font-normal text-small nowrap\">{{ message.locale }}</td>
                {% if is_fallback %}
                    <td class=\"font-normal text-small nowrap\">{{ message.fallbackLocale|default('-') }}</td>
                {% endif %}
                <td class=\"font-normal text-small text-bold nowrap\">{{ message.domain }}</td>
                <td class=\"font-normal text-small nowrap\">{{ message.count }}</td>
                <td>
                    <span class=\"nowrap\">{{ message.id }}</span>

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters, maxDepth=1) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td class=\"prewrap\">{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/translation.html.twig", "/Users/admin/my_crud_test/vendor/symfony/web-profiler-bundle/Resources/views/Collector/translation.html.twig");
    }
}
