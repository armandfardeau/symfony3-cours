<?php

/* :CreatureFantastique:new.html.twig */
class __TwigTemplate_8548d6bee1ad402e62116750e22fc30e3f4e42050bf941a10891962c1da843ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":CreatureFantastique:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eac0a83f2870d816127001ed038762993bdc8de0a52e7d2fee8a3493c9a0ce57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac0a83f2870d816127001ed038762993bdc8de0a52e7d2fee8a3493c9a0ce57->enter($__internal_eac0a83f2870d816127001ed038762993bdc8de0a52e7d2fee8a3493c9a0ce57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":CreatureFantastique:new.html.twig"));

        $__internal_7fef09d41912869de93cacc6b8c1bccd7dcbd0dad01d2287c227295f50bc37fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fef09d41912869de93cacc6b8c1bccd7dcbd0dad01d2287c227295f50bc37fb->enter($__internal_7fef09d41912869de93cacc6b8c1bccd7dcbd0dad01d2287c227295f50bc37fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":CreatureFantastique:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac0a83f2870d816127001ed038762993bdc8de0a52e7d2fee8a3493c9a0ce57->leave($__internal_eac0a83f2870d816127001ed038762993bdc8de0a52e7d2fee8a3493c9a0ce57_prof);

        
        $__internal_7fef09d41912869de93cacc6b8c1bccd7dcbd0dad01d2287c227295f50bc37fb->leave($__internal_7fef09d41912869de93cacc6b8c1bccd7dcbd0dad01d2287c227295f50bc37fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a44e6dfe3be2c5d0c074c071b8655068cc5441ee941c07365d531d3d7a263ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44e6dfe3be2c5d0c074c071b8655068cc5441ee941c07365d531d3d7a263ef2->enter($__internal_a44e6dfe3be2c5d0c074c071b8655068cc5441ee941c07365d531d3d7a263ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5618b276a1cc4c3ba93f32f1359c12738cefabdfbce22782cd09fc05a44130a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5618b276a1cc4c3ba93f32f1359c12738cefabdfbce22782cd09fc05a44130a->enter($__internal_a5618b276a1cc4c3ba93f32f1359c12738cefabdfbce22782cd09fc05a44130a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " AppBundle:CreatureFantastique:index ";
        
        $__internal_a5618b276a1cc4c3ba93f32f1359c12738cefabdfbce22782cd09fc05a44130a->leave($__internal_a5618b276a1cc4c3ba93f32f1359c12738cefabdfbce22782cd09fc05a44130a_prof);

        
        $__internal_a44e6dfe3be2c5d0c074c071b8655068cc5441ee941c07365d531d3d7a263ef2->leave($__internal_a44e6dfe3be2c5d0c074c071b8655068cc5441ee941c07365d531d3d7a263ef2_prof);

    }

    public function getTemplateName()
    {
        return ":CreatureFantastique:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %} AppBundle:CreatureFantastique:index {% endblock %}", ":CreatureFantastique:new.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/CreatureFantastique/new.html.twig");
    }
}
