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
        $__internal_b7220735e2560149e05aae908dc84de0f4e49e3b27e6110c9b58232b198df53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7220735e2560149e05aae908dc84de0f4e49e3b27e6110c9b58232b198df53e->enter($__internal_b7220735e2560149e05aae908dc84de0f4e49e3b27e6110c9b58232b198df53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5fe5323864777ad7d9ad9eee6490811e53487d44c05c09d239666cdd675c0993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe5323864777ad7d9ad9eee6490811e53487d44c05c09d239666cdd675c0993->enter($__internal_5fe5323864777ad7d9ad9eee6490811e53487d44c05c09d239666cdd675c0993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b7220735e2560149e05aae908dc84de0f4e49e3b27e6110c9b58232b198df53e->leave($__internal_b7220735e2560149e05aae908dc84de0f4e49e3b27e6110c9b58232b198df53e_prof);

        
        $__internal_5fe5323864777ad7d9ad9eee6490811e53487d44c05c09d239666cdd675c0993->leave($__internal_5fe5323864777ad7d9ad9eee6490811e53487d44c05c09d239666cdd675c0993_prof);

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
