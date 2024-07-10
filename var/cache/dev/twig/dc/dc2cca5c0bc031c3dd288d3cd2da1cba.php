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

/* bootstrap_5_horizontal_layout.html.twig */
class __TwigTemplate_387ea2a35e063091af19a97d74f9d6db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_5_layout.html.twig", "bootstrap_5_horizontal_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'button_row' => [$this, 'block_button_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap_5_horizontal_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bootstrap_5_horizontal_layout.html.twig"));

        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 19
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 23
        yield "
";
        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 72
        yield "
";
        // line 73
        yield from $this->unwrap()->yieldBlock('fieldset_form_row', $context, $blocks);
        // line 89
        yield "
";
        // line 90
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 98
        yield "
";
        // line 99
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 107
        yield "
";
        // line 108
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 116
        yield "
";
        // line 117
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 127
        yield "
";
        // line 128
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 6, $this->source); })()) === false)) {
            // line 7
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>";
        } else {
            // line 9
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 9, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : (""))));
            // line 10
            if ((!CoreExtension::inFilter("form-floating", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 10, $this->source); })())) && !CoreExtension::inFilter("input-group", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 10, $this->source); })())))) {
                // line 11
                if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 11, $this->source); })()))) {
                    // line 12
                    $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 12, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 12), "")) : ("")) . " col-form-label"))]);
                }
                // line 14
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 14, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            }
            // line 16
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 20
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 21
        yield "col-sm-2";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 26
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 27
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield from             $this->unwrap()->yieldBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 30
            $context["widget_attr"] = [];
            // line 31
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 31, $this->source); })()))) {
                // line 32
                $context["widget_attr"] = ["attr" => ["aria-describedby" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()) . "_help")]];
            }
            // line 34
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 34, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3"))));
            // line 35
            $context["is_form_floating"] = ((array_key_exists("is_form_floating", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_form_floating"]) || array_key_exists("is_form_floating", $context) ? $context["is_form_floating"] : (function () { throw new RuntimeError('Variable "is_form_floating" does not exist.', 35, $this->source); })()), CoreExtension::inFilter("form-floating", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 35, $this->source); })())))) : (CoreExtension::inFilter("form-floating", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 35, $this->source); })()))));
            // line 36
            $context["is_input_group"] = ((array_key_exists("is_input_group", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_input_group"]) || array_key_exists("is_input_group", $context) ? $context["is_input_group"] : (function () { throw new RuntimeError('Variable "is_input_group" does not exist.', 36, $this->source); })()), CoreExtension::inFilter("input-group", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 36, $this->source); })())))) : (CoreExtension::inFilter("input-group", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 36, $this->source); })()))));
            // line 38
            $context["row_class"] = Twig\Extension\CoreExtension::replace((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 38, $this->source); })()), ["form-floating" => "", "input-group" => ""]);
            // line 39
            yield "<div";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 39, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 39, $this->source); })()) . " row") . (((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 39, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 39, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 39, $this->source); })()))) ? (" is-invalid") : (""))))])];
            if (!is_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 39, $this->getSourceContext());
            }
            $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_0;
            yield ">";
            // line 40
            if (((isset($context["is_form_floating"]) || array_key_exists("is_form_floating", $context) ? $context["is_form_floating"] : (function () { throw new RuntimeError('Variable "is_form_floating" does not exist.', 40, $this->source); })()) || (isset($context["is_input_group"]) || array_key_exists("is_input_group", $context) ? $context["is_input_group"] : (function () { throw new RuntimeError('Variable "is_input_group" does not exist.', 40, $this->source); })()))) {
                // line 41
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
                <div class=\"";
                // line 42
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 43
                if ((isset($context["is_form_floating"]) || array_key_exists("is_form_floating", $context) ? $context["is_form_floating"] : (function () { throw new RuntimeError('Variable "is_form_floating" does not exist.', 43, $this->source); })())) {
                    // line 44
                    yield "<div class=\"form-floating\">";
                    // line 45
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 45, $this->source); })()));
                    // line 46
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'label');
                    // line 47
                    yield "</div>";
                } elseif (                // line 48
(isset($context["is_input_group"]) || array_key_exists("is_input_group", $context) ? $context["is_input_group"] : (function () { throw new RuntimeError('Variable "is_input_group" does not exist.', 48, $this->source); })())) {
                    // line 49
                    yield "<div class=\"input-group\">";
                    // line 50
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'label');
                    // line 51
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 51, $this->source); })()));
                    // line 53
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'help');
                    // line 54
                    yield "</div>";
                }
                // line 56
                if ( !(isset($context["is_input_group"]) || array_key_exists("is_input_group", $context) ? $context["is_input_group"] : (function () { throw new RuntimeError('Variable "is_input_group" does not exist.', 56, $this->source); })())) {
                    // line 57
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'help');
                }
                // line 59
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'errors');
                // line 60
                yield "</div>";
            } else {
                // line 62
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'label');
                // line 63
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 64
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 64, $this->source); })()));
                // line 65
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'help');
                // line 66
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'errors');
                // line 67
                yield "</div>";
            }
            // line 69
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 73
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 74
        $context["widget_attr"] = [];
        // line 75
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 75, $this->source); })()))) {
            // line 76
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 76, $this->source); })()) . "_help")]];
        }
        // line 78
        yield "<fieldset";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 78, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 78), "mb-3")) : ("mb-3")))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 78, $this->getSourceContext());
        }
        $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        yield ">
        <div class=\"row";
        // line 79
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 79, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 79, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 79, $this->source); })()))) {
            yield " is-invalid";
        }
        yield "\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'label');
        // line 81
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 82, $this->source); })()));
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'help');
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'errors');
        // line 85
        yield "</div>
        </div>
    </fieldset>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 90
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_row"));

        // line 91
        yield "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 91, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 91), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 91, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">";
        // line 92
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 93
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'widget');
        // line 95
        yield "</div>";
        // line 96
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 99
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reset_row"));

        // line 100
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 100, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 100), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 100, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">";
        // line 101
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 102
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'widget');
        // line 104
        yield "</div>";
        // line 105
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 108
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 109
        yield "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 109, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 109), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 109, $this->getSourceContext());
        }
        $__internal_compile_9 = CoreExtension::toArray($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        yield ">";
        // line 110
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 111
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'widget');
        // line 113
        yield "</div>";
        // line 114
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 117
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 118
        yield "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => Twig\Extension\CoreExtension::merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 118, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 118), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 118, $this->getSourceContext());
        }
        $__internal_compile_11 = CoreExtension::toArray($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        yield ">";
        // line 119
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 120
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'widget');
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'help');
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'errors');
        // line 124
        yield "</div>";
        // line 125
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 128
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 129
        yield "col-sm-10";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bootstrap_5_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  553 => 129,  543 => 128,  532 => 125,  530 => 124,  528 => 123,  526 => 122,  524 => 121,  520 => 120,  516 => 119,  504 => 118,  494 => 117,  483 => 114,  481 => 113,  479 => 112,  475 => 111,  471 => 110,  459 => 109,  449 => 108,  438 => 105,  436 => 104,  434 => 103,  430 => 102,  426 => 101,  414 => 100,  404 => 99,  393 => 96,  391 => 95,  389 => 94,  385 => 93,  381 => 92,  369 => 91,  359 => 90,  346 => 85,  344 => 84,  342 => 83,  340 => 82,  336 => 81,  334 => 80,  329 => 79,  316 => 78,  313 => 76,  311 => 75,  309 => 74,  299 => 73,  287 => 69,  284 => 67,  282 => 66,  280 => 65,  278 => 64,  274 => 63,  272 => 62,  269 => 60,  267 => 59,  264 => 57,  262 => 56,  259 => 54,  257 => 53,  255 => 51,  253 => 50,  251 => 49,  249 => 48,  247 => 47,  245 => 46,  243 => 45,  241 => 44,  239 => 43,  236 => 42,  231 => 41,  229 => 40,  217 => 39,  215 => 38,  213 => 36,  211 => 35,  209 => 34,  206 => 32,  204 => 31,  202 => 30,  199 => 28,  197 => 27,  187 => 26,  176 => 21,  166 => 20,  154 => 16,  151 => 14,  148 => 12,  146 => 11,  144 => 10,  142 => 9,  137 => 7,  135 => 6,  125 => 5,  114 => 128,  111 => 127,  109 => 117,  106 => 116,  104 => 108,  101 => 107,  99 => 99,  96 => 98,  94 => 90,  91 => 89,  89 => 73,  86 => 72,  84 => 26,  81 => 25,  78 => 23,  76 => 20,  73 => 19,  71 => 5,  68 => 4,  65 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% use \"bootstrap_5_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set row_class = row_class|default(row_attr.class|default('')) -%}
        {%- if 'form-floating' not in row_class and 'input-group' not in row_class -%}
            {%- if expanded is not defined or not expanded -%}
                {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
            {%- endif -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {%- endif -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
    col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        {%- set widget_attr = {} -%}
        {%- if help is not empty -%}
            {%- set widget_attr = {attr: {'aria-describedby': id ~\"_help\"}} -%}
        {%- endif -%}
        {%- set row_class = row_class|default(row_attr.class|default('mb-3')) -%}
        {%- set is_form_floating = is_form_floating|default('form-floating' in row_class) -%}
        {%- set is_input_group = is_input_group|default('input-group' in row_class) -%}
        {#- Remove behavior class from the main container -#}
        {%- set row_class = row_class|replace({'form-floating': '', 'input-group': ''}) -%}
        <div{% with {attr: row_attr|merge({class: (row_class ~ ' row' ~ ((not compound or force_error|default(false)) and not valid ? ' is-invalid'))|trim})} %}{{ block('attributes') }}{% endwith %}>
            {%- if is_form_floating or is_input_group -%}
                <div class=\"{{ block('form_label_class') }}\"></div>
                <div class=\"{{ block('form_group_class') }}\">
                    {%- if is_form_floating -%}
                        <div class=\"form-floating\">
                            {{- form_widget(form, widget_attr) -}}
                            {{- form_label(form) -}}
                        </div>
                    {%- elseif is_input_group -%}
                        <div class=\"input-group\">
                            {{- form_label(form) -}}
                            {{- form_widget(form, widget_attr) -}}
                            {#- Hack to properly display help with input group -#}
                            {{- form_help(form) -}}
                        </div>
                    {%- endif -%}
                    {%- if not is_input_group -%}
                        {{- form_help(form) -}}
                    {%- endif -%}
                    {{- form_errors(form) -}}
                </div>
            {%- else -%}
                {{- form_label(form) -}}
                <div class=\"{{ block('form_group_class') }}\">
                    {{- form_widget(form, widget_attr) -}}
                    {{- form_help(form) -}}
                    {{- form_errors(form) -}}
                </div>
            {%- endif -%}
        {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    {%- set widget_attr = {} -%}
    {%- if help is not empty -%}
        {%- set widget_attr = {attr: {'aria-describedby': id ~\"_help\"}} -%}
    {%- endif -%}
    <fieldset{% with {attr: row_attr|merge({class: row_attr.class|default('mb-3')|trim})} %}{{ block('attributes') }}{% endwith %}>
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form, widget_attr) -}}
                {{- form_help(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
    </fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default('mb-3') ~ ' row')|trim})} %}{{ block('attributes') }}{% endwith %}>{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default('mb-3') ~ ' row')|trim})} %}{{ block('attributes') }}{% endwith %}>{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block button_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default('mb-3') ~ ' row')|trim})} %}{{ block('attributes') }}{% endwith %}>{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock button_row %}

{% block checkbox_row -%}
    <div{% with {attr: row_attr|merge({class: (row_attr.class|default('mb-3') ~ ' row')|trim})} %}{{ block('attributes') }}{% endwith %}>{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_help(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}

{% block form_group_class -%}
    col-sm-10
{%- endblock form_group_class %}
", "bootstrap_5_horizontal_layout.html.twig", "/Users/admin/my_crud_test/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_5_horizontal_layout.html.twig");
    }
}
