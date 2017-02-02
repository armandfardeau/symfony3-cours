<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_28cf4185674586f5c044a18f01098339e4db996ff7d34f31618b9f5b587bcb6e extends Twig_Template
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
        $__internal_df3e49796ef0fdbd892b77d6a7ab625395d1b9b30af7f59d7eb55dceff408b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3e49796ef0fdbd892b77d6a7ab625395d1b9b30af7f59d7eb55dceff408b65->enter($__internal_df3e49796ef0fdbd892b77d6a7ab625395d1b9b30af7f59d7eb55dceff408b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_52bb43928c384160631ebf6510e4f784cbef13c2b575daf008da288447f3ded1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bb43928c384160631ebf6510e4f784cbef13c2b575daf008da288447f3ded1->enter($__internal_52bb43928c384160631ebf6510e4f784cbef13c2b575daf008da288447f3ded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_df3e49796ef0fdbd892b77d6a7ab625395d1b9b30af7f59d7eb55dceff408b65->leave($__internal_df3e49796ef0fdbd892b77d6a7ab625395d1b9b30af7f59d7eb55dceff408b65_prof);

        
        $__internal_52bb43928c384160631ebf6510e4f784cbef13c2b575daf008da288447f3ded1->leave($__internal_52bb43928c384160631ebf6510e4f784cbef13c2b575daf008da288447f3ded1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
