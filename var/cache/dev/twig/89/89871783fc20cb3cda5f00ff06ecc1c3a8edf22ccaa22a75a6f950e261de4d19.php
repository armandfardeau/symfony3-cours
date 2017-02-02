<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_510bbd4b9592d98741f734032b758c82fe00d876ddba9d69d8e1035d0fdc103f extends Twig_Template
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
        $__internal_44be4b15d7238b99b8c9b2b2b5f42081c18606bcdf40c72907c969cb74f45fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44be4b15d7238b99b8c9b2b2b5f42081c18606bcdf40c72907c969cb74f45fc8->enter($__internal_44be4b15d7238b99b8c9b2b2b5f42081c18606bcdf40c72907c969cb74f45fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_055c399a6b0b0a4af6f387b2fb4f3564b1efafe6befe2926501c2a28d3101f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055c399a6b0b0a4af6f387b2fb4f3564b1efafe6befe2926501c2a28d3101f50->enter($__internal_055c399a6b0b0a4af6f387b2fb4f3564b1efafe6befe2926501c2a28d3101f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_44be4b15d7238b99b8c9b2b2b5f42081c18606bcdf40c72907c969cb74f45fc8->leave($__internal_44be4b15d7238b99b8c9b2b2b5f42081c18606bcdf40c72907c969cb74f45fc8_prof);

        
        $__internal_055c399a6b0b0a4af6f387b2fb4f3564b1efafe6befe2926501c2a28d3101f50->leave($__internal_055c399a6b0b0a4af6f387b2fb4f3564b1efafe6befe2926501c2a28d3101f50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
