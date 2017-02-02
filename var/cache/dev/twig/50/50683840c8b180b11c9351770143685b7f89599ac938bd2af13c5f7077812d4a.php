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
        $__internal_d3fb36b1119f46e86db66efdf539146e81ef4664767820c702034cb504ed1be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fb36b1119f46e86db66efdf539146e81ef4664767820c702034cb504ed1be5->enter($__internal_d3fb36b1119f46e86db66efdf539146e81ef4664767820c702034cb504ed1be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_48c073a40be0b682d2bafb9b3637e07594149778bc2eb276968613d6713a877e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c073a40be0b682d2bafb9b3637e07594149778bc2eb276968613d6713a877e->enter($__internal_48c073a40be0b682d2bafb9b3637e07594149778bc2eb276968613d6713a877e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d3fb36b1119f46e86db66efdf539146e81ef4664767820c702034cb504ed1be5->leave($__internal_d3fb36b1119f46e86db66efdf539146e81ef4664767820c702034cb504ed1be5_prof);

        
        $__internal_48c073a40be0b682d2bafb9b3637e07594149778bc2eb276968613d6713a877e->leave($__internal_48c073a40be0b682d2bafb9b3637e07594149778bc2eb276968613d6713a877e_prof);

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
