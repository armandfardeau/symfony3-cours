<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e015407930b448ce8e9af53b594b454e3f6bbe4ec5906f6ccbc7b88cf15750c0 extends Twig_Template
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
        $__internal_a0a1176816554704e40c313ea5f4e5e7e3436f16cfdc1798dafca544bad7e588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a1176816554704e40c313ea5f4e5e7e3436f16cfdc1798dafca544bad7e588->enter($__internal_a0a1176816554704e40c313ea5f4e5e7e3436f16cfdc1798dafca544bad7e588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_b58974ae25e8d1f58e7ec2cf86b00ccc551b72223bf47c6eb395fcbf07f237af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58974ae25e8d1f58e7ec2cf86b00ccc551b72223bf47c6eb395fcbf07f237af->enter($__internal_b58974ae25e8d1f58e7ec2cf86b00ccc551b72223bf47c6eb395fcbf07f237af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a0a1176816554704e40c313ea5f4e5e7e3436f16cfdc1798dafca544bad7e588->leave($__internal_a0a1176816554704e40c313ea5f4e5e7e3436f16cfdc1798dafca544bad7e588_prof);

        
        $__internal_b58974ae25e8d1f58e7ec2cf86b00ccc551b72223bf47c6eb395fcbf07f237af->leave($__internal_b58974ae25e8d1f58e7ec2cf86b00ccc551b72223bf47c6eb395fcbf07f237af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
