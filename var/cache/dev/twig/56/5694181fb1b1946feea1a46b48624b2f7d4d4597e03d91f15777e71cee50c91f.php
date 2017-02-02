<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_aa23db47df4932889e35336158ce36a4432af826b4b2298a435df1ef38202750 extends Twig_Template
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
        $__internal_de0c2e3b23e19a3ea39fe12698cef35e692762d98a86fccb4e0f61686ca971ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0c2e3b23e19a3ea39fe12698cef35e692762d98a86fccb4e0f61686ca971ce->enter($__internal_de0c2e3b23e19a3ea39fe12698cef35e692762d98a86fccb4e0f61686ca971ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_11311e3f783651d21d66da17e464be2b245eb27c7b0456b3c76988539ec2caed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11311e3f783651d21d66da17e464be2b245eb27c7b0456b3c76988539ec2caed->enter($__internal_11311e3f783651d21d66da17e464be2b245eb27c7b0456b3c76988539ec2caed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_de0c2e3b23e19a3ea39fe12698cef35e692762d98a86fccb4e0f61686ca971ce->leave($__internal_de0c2e3b23e19a3ea39fe12698cef35e692762d98a86fccb4e0f61686ca971ce_prof);

        
        $__internal_11311e3f783651d21d66da17e464be2b245eb27c7b0456b3c76988539ec2caed->leave($__internal_11311e3f783651d21d66da17e464be2b245eb27c7b0456b3c76988539ec2caed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
