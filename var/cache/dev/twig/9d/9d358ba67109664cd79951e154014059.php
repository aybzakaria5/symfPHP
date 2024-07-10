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

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_947d7b0d0311aea256f60b30ac1642dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        // line 1
        yield "<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">";
        // line 5
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 5, $this->source); })()), "route", [], "any", false, false, false, 5), "html", null, true)) : (yield "(none)"));
        yield "</span>
        <span class=\"label\">Matched route</span>
    </div>
</div>

";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 10, $this->source); })()), "route", [], "any", false, false, false, 10)) {
            // line 11
            yield "    <h3>Route Parameters</h3>

    ";
            // line 13
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 13, $this->source); })()), "routeParams", [], "any", false, false, false, 13))) {
                // line 14
                yield "        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    ";
            } else {
                // line 18
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 18, $this->source); })()), "routeParams", [], "any", false, false, false, 18), "labels" => ["Name", "Value"]], false);
                yield "
    ";
            }
        }
        // line 21
        yield "
";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 22, $this->source); })()), "redirect", [], "any", false, false, false, 22)) {
            // line 23
            yield "    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 27, $this->source); })()), "targetUrl", [], "any", false, false, false, 27), "html", null, true);
            yield "
        ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 28, $this->source); })()), "targetRoute", [], "any", false, false, false, 28)) {
                yield "<span class=\"text-muted\">(route: \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 28, $this->source); })()), "targetRoute", [], "any", false, false, false, 28), "html", null, true);
                yield "\")</span>";
            }
            // line 29
            yield "    </div>
";
        }
        // line 31
        yield "
<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 35, $this->source); })()), "pathinfo", [], "any", false, false, false, 35), "html", null, true);
        yield "</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["traces"]) || array_key_exists("traces", $context) ? $context["traces"] : (function () { throw new RuntimeError('Variable "traces" does not exist.', 48, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 49
            yield "        <tr class=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 49) == 1)) ? ("status-warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 49) == 2)) ? ("status-success") : (""))));
            yield "\">
            <td class=\"font-normal text-muted nowrap\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
            <td class=\"break-long-words\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "name", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
            <td class=\"break-long-words\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "path", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
            <td class=\"font-normal\">
                ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "level", [], "any", false, false, false, 54) == 1)) {
                // line 55
                yield "                    Path almost matches, but
                    <span class=\"newline\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 56), "html", null, true);
                yield "</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 57
$context["trace"], "level", [], "any", false, false, false, 57) == 2)) {
                // line 58
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "log", [], "any", false, false, false, 58), "html", null, true);
                yield "
                ";
            } else {
                // line 60
                yield "                    Path does not match
                ";
            }
            // line 62
            yield "            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Router/panel.html.twig";
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
        return array (  198 => 65,  182 => 62,  178 => 60,  172 => 58,  170 => 57,  166 => 56,  163 => 55,  161 => 54,  156 => 52,  152 => 51,  148 => 50,  143 => 49,  126 => 48,  110 => 35,  104 => 31,  100 => 29,  94 => 28,  90 => 27,  84 => 23,  82 => 22,  79 => 21,  72 => 18,  66 => 14,  64 => 13,  60 => 11,  58 => 10,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Routing</h2>

<div class=\"metrics\">
    <div class=\"metric\">
        <span class=\"value\">{{ request.route ?: '(none)' }}</span>
        <span class=\"label\">Matched route</span>
    </div>
</div>

{% if request.route %}
    <h3>Route Parameters</h3>

    {% if request.routeParams is empty %}
        <div class=\"empty\">
            <p>No parameters.</p>
        </div>
    {% else %}
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: request.routeParams, labels: ['Name', 'Value'] }, with_context = false) }}
    {% endif %}
{% endif %}

{% if router.redirect %}
    <h3>Route Redirection</h3>

    <p>This page redirects to:</p>
    <div class=\"card break-long-words\">
        {{ router.targetUrl }}
        {% if router.targetRoute %}<span class=\"text-muted\">(route: \"{{ router.targetRoute }}\")</span>{% endif %}
    </div>
{% endif %}

<h3>Route Matching Logs</h3>

<div class=\"card\">
    <strong>Path to match:</strong> <code>{{ request.pathinfo }}</code>
</div>

<table id=\"router-logs\">
    <thead>
        <tr>
            <th>#</th>
            <th>Route name</th>
            <th>Path</th>
            <th>Log</th>
        </tr>
    </thead>
    <tbody>
    {% for trace in traces %}
        <tr class=\"{{ trace.level == 1 ? 'status-warning' : trace.level == 2 ? 'status-success' }}\">
            <td class=\"font-normal text-muted nowrap\">{{ loop.index }}</td>
            <td class=\"break-long-words\">{{ trace.name }}</td>
            <td class=\"break-long-words\">{{ trace.path }}</td>
            <td class=\"font-normal\">
                {% if trace.level == 1 %}
                    Path almost matches, but
                    <span class=\"newline\">{{ trace.log }}</span>
                {% elseif trace.level == 2 %}
                    {{ trace.log }}
                {% else %}
                    Path does not match
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<p class=\"help\">
    Note: These matching logs are based on the current router configuration,
    which might differ from the configuration used when profiling this request.
</p>
", "@WebProfiler/Router/panel.html.twig", "/Users/admin/my_crud_test/vendor/symfony/web-profiler-bundle/Resources/views/Router/panel.html.twig");
    }
}
