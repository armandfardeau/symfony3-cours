<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5fbf9c54e56c37504b5e430e600055c25bb154edfb5e832c6664ae08ed2fad3e extends Twig_Template
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
        $__internal_a18d2a6aa9204ddf050b5a8076551a197d7aaeb868feb4a14775aac34572ea25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18d2a6aa9204ddf050b5a8076551a197d7aaeb868feb4a14775aac34572ea25->enter($__internal_a18d2a6aa9204ddf050b5a8076551a197d7aaeb868feb4a14775aac34572ea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_15df0a03acd8c7c29ee79ae9bbfade1dbd58ba16f9f2945eb93a04de23a206fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15df0a03acd8c7c29ee79ae9bbfade1dbd58ba16f9f2945eb93a04de23a206fb->enter($__internal_15df0a03acd8c7c29ee79ae9bbfade1dbd58ba16f9f2945eb93a04de23a206fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a18d2a6aa9204ddf050b5a8076551a197d7aaeb868feb4a14775aac34572ea25->leave($__internal_a18d2a6aa9204ddf050b5a8076551a197d7aaeb868feb4a14775aac34572ea25_prof);

        
        $__internal_15df0a03acd8c7c29ee79ae9bbfade1dbd58ba16f9f2945eb93a04de23a206fb->leave($__internal_15df0a03acd8c7c29ee79ae9bbfade1dbd58ba16f9f2945eb93a04de23a206fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
