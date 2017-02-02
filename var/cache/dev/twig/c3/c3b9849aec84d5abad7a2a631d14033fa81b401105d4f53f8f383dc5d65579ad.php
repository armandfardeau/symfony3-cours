<?php

/* :Student:index.html.twig */
class __TwigTemplate_c55671ae665521d5e90e335216f1651f69886ec836f69a170b9c02783ee9b216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Student:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba3809f0137d21fdc38f5b34a473171c296860274dc250fbd65158cd485daec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3809f0137d21fdc38f5b34a473171c296860274dc250fbd65158cd485daec9->enter($__internal_ba3809f0137d21fdc38f5b34a473171c296860274dc250fbd65158cd485daec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Student:index.html.twig"));

        $__internal_66d4222e2277b4e42214bfd538133672ab7949d2eaa1707b4e9671c1286539b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d4222e2277b4e42214bfd538133672ab7949d2eaa1707b4e9671c1286539b0->enter($__internal_66d4222e2277b4e42214bfd538133672ab7949d2eaa1707b4e9671c1286539b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Student:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba3809f0137d21fdc38f5b34a473171c296860274dc250fbd65158cd485daec9->leave($__internal_ba3809f0137d21fdc38f5b34a473171c296860274dc250fbd65158cd485daec9_prof);

        
        $__internal_66d4222e2277b4e42214bfd538133672ab7949d2eaa1707b4e9671c1286539b0->leave($__internal_66d4222e2277b4e42214bfd538133672ab7949d2eaa1707b4e9671c1286539b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26f7377f03d12cb1178e032ddb868a95d67a619418b0f581d7ebd0449badeaf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f7377f03d12cb1178e032ddb868a95d67a619418b0f581d7ebd0449badeaf0->enter($__internal_26f7377f03d12cb1178e032ddb868a95d67a619418b0f581d7ebd0449badeaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c725defa5fb2e2d2bdce97715915253b77a80609e71ab83fe471bc7ed497958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c725defa5fb2e2d2bdce97715915253b77a80609e71ab83fe471bc7ed497958->enter($__internal_2c725defa5fb2e2d2bdce97715915253b77a80609e71ab83fe471bc7ed497958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JustBundle:StudentController:index";
        
        $__internal_2c725defa5fb2e2d2bdce97715915253b77a80609e71ab83fe471bc7ed497958->leave($__internal_2c725defa5fb2e2d2bdce97715915253b77a80609e71ab83fe471bc7ed497958_prof);

        
        $__internal_26f7377f03d12cb1178e032ddb868a95d67a619418b0f581d7ebd0449badeaf0->leave($__internal_26f7377f03d12cb1178e032ddb868a95d67a619418b0f581d7ebd0449badeaf0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_40b74bacc50ad3f0411fb1f5da6940f3b20642ab4af946375fab43887cd7318f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b74bacc50ad3f0411fb1f5da6940f3b20642ab4af946375fab43887cd7318f->enter($__internal_40b74bacc50ad3f0411fb1f5da6940f3b20642ab4af946375fab43887cd7318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca44252582394ee9649e8bc9d8443faef0b1b96bf16fe22fca48010bebe5e2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca44252582394ee9649e8bc9d8443faef0b1b96bf16fe22fca48010bebe5e2f7->enter($__internal_ca44252582394ee9649e8bc9d8443faef0b1b96bf16fe22fca48010bebe5e2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the StudentController:index page</h1>
";
        
        $__internal_ca44252582394ee9649e8bc9d8443faef0b1b96bf16fe22fca48010bebe5e2f7->leave($__internal_ca44252582394ee9649e8bc9d8443faef0b1b96bf16fe22fca48010bebe5e2f7_prof);

        
        $__internal_40b74bacc50ad3f0411fb1f5da6940f3b20642ab4af946375fab43887cd7318f->leave($__internal_40b74bacc50ad3f0411fb1f5da6940f3b20642ab4af946375fab43887cd7318f_prof);

    }

    public function getTemplateName()
    {
        return ":Student:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}JustBundle:StudentController:index{% endblock %}

{% block body %}
<h1>Welcome to the StudentController:index page</h1>
{% endblock %}
", ":Student:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/app/Resources/views/Student/index.html.twig");
    }
}
