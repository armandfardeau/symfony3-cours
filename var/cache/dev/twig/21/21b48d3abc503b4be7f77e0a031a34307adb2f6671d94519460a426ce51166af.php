<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ca72b84f37db67f12fc962662172f940f9f4717b44681a7269609e78add844e2 extends Twig_Template
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
        $__internal_db98e6b502c3fb42118b3a7345bfc7ca8f7d0e3c2c38ee7526c03a15bc343194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db98e6b502c3fb42118b3a7345bfc7ca8f7d0e3c2c38ee7526c03a15bc343194->enter($__internal_db98e6b502c3fb42118b3a7345bfc7ca8f7d0e3c2c38ee7526c03a15bc343194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_2eeafa4520769656816a94e9a11218c4eba0201582f2d95f09c816734b75c602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eeafa4520769656816a94e9a11218c4eba0201582f2d95f09c816734b75c602->enter($__internal_2eeafa4520769656816a94e9a11218c4eba0201582f2d95f09c816734b75c602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_db98e6b502c3fb42118b3a7345bfc7ca8f7d0e3c2c38ee7526c03a15bc343194->leave($__internal_db98e6b502c3fb42118b3a7345bfc7ca8f7d0e3c2c38ee7526c03a15bc343194_prof);

        
        $__internal_2eeafa4520769656816a94e9a11218c4eba0201582f2d95f09c816734b75c602->leave($__internal_2eeafa4520769656816a94e9a11218c4eba0201582f2d95f09c816734b75c602_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
