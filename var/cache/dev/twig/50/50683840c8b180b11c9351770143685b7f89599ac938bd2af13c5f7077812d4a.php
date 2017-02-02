<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f82e6b9e11bc0323553b61763fd5f66263ace55be963775b3197e48fb845e8fa extends Twig_Template
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
        $__internal_9718e32d71aaaadfba148b4f14c460cd1a56485ce8e1482ad8571c08ff05f23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9718e32d71aaaadfba148b4f14c460cd1a56485ce8e1482ad8571c08ff05f23c->enter($__internal_9718e32d71aaaadfba148b4f14c460cd1a56485ce8e1482ad8571c08ff05f23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1046b01d841c1e63c5aec1aa2badec487a93b6022d1947468b555664f576b5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1046b01d841c1e63c5aec1aa2badec487a93b6022d1947468b555664f576b5e2->enter($__internal_1046b01d841c1e63c5aec1aa2badec487a93b6022d1947468b555664f576b5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9718e32d71aaaadfba148b4f14c460cd1a56485ce8e1482ad8571c08ff05f23c->leave($__internal_9718e32d71aaaadfba148b4f14c460cd1a56485ce8e1482ad8571c08ff05f23c_prof);

        
        $__internal_1046b01d841c1e63c5aec1aa2badec487a93b6022d1947468b555664f576b5e2->leave($__internal_1046b01d841c1e63c5aec1aa2badec487a93b6022d1947468b555664f576b5e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
