<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8fc1e4352312bd850b230056cf35200c1db9749fefbc53d3d93ac51a4b0692eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_178fbfd48af37cf3851a5df64e9f52c2ff112759d61a3459ce0e9a780df0914b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178fbfd48af37cf3851a5df64e9f52c2ff112759d61a3459ce0e9a780df0914b->enter($__internal_178fbfd48af37cf3851a5df64e9f52c2ff112759d61a3459ce0e9a780df0914b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_586ccf9d4a87afe0d03048683ded99df1dda91e19e3621c929dbc3b1fb157a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586ccf9d4a87afe0d03048683ded99df1dda91e19e3621c929dbc3b1fb157a9d->enter($__internal_586ccf9d4a87afe0d03048683ded99df1dda91e19e3621c929dbc3b1fb157a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_178fbfd48af37cf3851a5df64e9f52c2ff112759d61a3459ce0e9a780df0914b->leave($__internal_178fbfd48af37cf3851a5df64e9f52c2ff112759d61a3459ce0e9a780df0914b_prof);

        
        $__internal_586ccf9d4a87afe0d03048683ded99df1dda91e19e3621c929dbc3b1fb157a9d->leave($__internal_586ccf9d4a87afe0d03048683ded99df1dda91e19e3621c929dbc3b1fb157a9d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_777d05b9f378cff0860dc2bc28a82777026ca31fb3b2d2f466896fcb5ad06137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777d05b9f378cff0860dc2bc28a82777026ca31fb3b2d2f466896fcb5ad06137->enter($__internal_777d05b9f378cff0860dc2bc28a82777026ca31fb3b2d2f466896fcb5ad06137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e4866145030b4166042fc58b2d65269d82e28ad078d3e1f403aee94e2bd4f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4866145030b4166042fc58b2d65269d82e28ad078d3e1f403aee94e2bd4f2c->enter($__internal_5e4866145030b4166042fc58b2d65269d82e28ad078d3e1f403aee94e2bd4f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5e4866145030b4166042fc58b2d65269d82e28ad078d3e1f403aee94e2bd4f2c->leave($__internal_5e4866145030b4166042fc58b2d65269d82e28ad078d3e1f403aee94e2bd4f2c_prof);

        
        $__internal_777d05b9f378cff0860dc2bc28a82777026ca31fb3b2d2f466896fcb5ad06137->leave($__internal_777d05b9f378cff0860dc2bc28a82777026ca31fb3b2d2f466896fcb5ad06137_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
