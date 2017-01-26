<?php

/* BunkerBundle:Default:index.html.twig */
class __TwigTemplate_73bb78eff4de607f8c2c04d0f662a68e03006b850e2d2386f4b778afbffdddb7 extends Twig_Template
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
        $__internal_51ab738ba328311d5bdd04ff2997c458a7b7e2757d9c574ac1019e77e270390f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ab738ba328311d5bdd04ff2997c458a7b7e2757d9c574ac1019e77e270390f->enter($__internal_51ab738ba328311d5bdd04ff2997c458a7b7e2757d9c574ac1019e77e270390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_a859fe222ce7373cc1de0b8e24e919765b2be5715941abf455b1ce4591c3781d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a859fe222ce7373cc1de0b8e24e919765b2be5715941abf455b1ce4591c3781d->enter($__internal_a859fe222ce7373cc1de0b8e24e919765b2be5715941abf455b1ce4591c3781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_51ab738ba328311d5bdd04ff2997c458a7b7e2757d9c574ac1019e77e270390f->leave($__internal_51ab738ba328311d5bdd04ff2997c458a7b7e2757d9c574ac1019e77e270390f_prof);

        
        $__internal_a859fe222ce7373cc1de0b8e24e919765b2be5715941abf455b1ce4591c3781d->leave($__internal_a859fe222ce7373cc1de0b8e24e919765b2be5715941abf455b1ce4591c3781d_prof);

    }

    public function getTemplateName()
    {
        return "BunkerBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "BunkerBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/BunkerBundle/Resources/views/Default/index.html.twig");
    }
}
