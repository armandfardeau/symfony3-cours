<?php

/* JustBundle:Default:index.html.twig */
class __TwigTemplate_fadbe05dc201ffcaa54ddeb86745197e1c90da85ddc7273873cad2ba40b04e3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_155f115458964c4dd00731b0418866939e1a0c1b8f5f7cda504e2aa40293b0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155f115458964c4dd00731b0418866939e1a0c1b8f5f7cda504e2aa40293b0f7->enter($__internal_155f115458964c4dd00731b0418866939e1a0c1b8f5f7cda504e2aa40293b0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

        $__internal_6e78926b1e84ad95e15a96337d2652915e918ade9cf894f4cffed1c98edf8344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e78926b1e84ad95e15a96337d2652915e918ade9cf894f4cffed1c98edf8344->enter($__internal_6e78926b1e84ad95e15a96337d2652915e918ade9cf894f4cffed1c98edf8344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "</body>
</html>
";
        
        $__internal_155f115458964c4dd00731b0418866939e1a0c1b8f5f7cda504e2aa40293b0f7->leave($__internal_155f115458964c4dd00731b0418866939e1a0c1b8f5f7cda504e2aa40293b0f7_prof);

        
        $__internal_6e78926b1e84ad95e15a96337d2652915e918ade9cf894f4cffed1c98edf8344->leave($__internal_6e78926b1e84ad95e15a96337d2652915e918ade9cf894f4cffed1c98edf8344_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39769d44855bbf1f46a3fe5bffb23bb1804800d794a57588145656c91c10d4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39769d44855bbf1f46a3fe5bffb23bb1804800d794a57588145656c91c10d4de->enter($__internal_39769d44855bbf1f46a3fe5bffb23bb1804800d794a57588145656c91c10d4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96415f1d930cd0f1cd6e08ce0506077515b5e821306d91eb55134e84bd2163b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96415f1d930cd0f1cd6e08ce0506077515b5e821306d91eb55134e84bd2163b3->enter($__internal_96415f1d930cd0f1cd6e08ce0506077515b5e821306d91eb55134e84bd2163b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_96415f1d930cd0f1cd6e08ce0506077515b5e821306d91eb55134e84bd2163b3->leave($__internal_96415f1d930cd0f1cd6e08ce0506077515b5e821306d91eb55134e84bd2163b3_prof);

        
        $__internal_39769d44855bbf1f46a3fe5bffb23bb1804800d794a57588145656c91c10d4de->leave($__internal_39769d44855bbf1f46a3fe5bffb23bb1804800d794a57588145656c91c10d4de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62b09f9d5cd4bc8bc1c76804331b740cea02c63e97242cbc0d5d44f0801fc47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b09f9d5cd4bc8bc1c76804331b740cea02c63e97242cbc0d5d44f0801fc47f->enter($__internal_62b09f9d5cd4bc8bc1c76804331b740cea02c63e97242cbc0d5d44f0801fc47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_33e3f4670ad2bc0c269d186f82c13bc8b70aa4256b0074ea209fc40d8066e79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e3f4670ad2bc0c269d186f82c13bc8b70aa4256b0074ea209fc40d8066e79c->enter($__internal_33e3f4670ad2bc0c269d186f82c13bc8b70aa4256b0074ea209fc40d8066e79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_33e3f4670ad2bc0c269d186f82c13bc8b70aa4256b0074ea209fc40d8066e79c->leave($__internal_33e3f4670ad2bc0c269d186f82c13bc8b70aa4256b0074ea209fc40d8066e79c_prof);

        
        $__internal_62b09f9d5cd4bc8bc1c76804331b740cea02c63e97242cbc0d5d44f0801fc47f->leave($__internal_62b09f9d5cd4bc8bc1c76804331b740cea02c63e97242cbc0d5d44f0801fc47f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d01fcdfd5f557689cbd99b8f8a0148e55c6c5ac0e497d05708bafbcb565e0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d01fcdfd5f557689cbd99b8f8a0148e55c6c5ac0e497d05708bafbcb565e0f7->enter($__internal_1d01fcdfd5f557689cbd99b8f8a0148e55c6c5ac0e497d05708bafbcb565e0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3c99633becbfaa01dd9ac2adf5de8037e6d86d115a7fb5bc2a9e347110bab10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c99633becbfaa01dd9ac2adf5de8037e6d86d115a7fb5bc2a9e347110bab10->enter($__internal_b3c99633becbfaa01dd9ac2adf5de8037e6d86d115a7fb5bc2a9e347110bab10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b3c99633becbfaa01dd9ac2adf5de8037e6d86d115a7fb5bc2a9e347110bab10->leave($__internal_b3c99633becbfaa01dd9ac2adf5de8037e6d86d115a7fb5bc2a9e347110bab10_prof);

        
        $__internal_1d01fcdfd5f557689cbd99b8f8a0148e55c6c5ac0e497d05708bafbcb565e0f7->leave($__internal_1d01fcdfd5f557689cbd99b8f8a0148e55c6c5ac0e497d05708bafbcb565e0f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83e4f20d52e6fcc25982b442c6eed21176bbb2111b58f247d73faa21c487f2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e4f20d52e6fcc25982b442c6eed21176bbb2111b58f247d73faa21c487f2cb->enter($__internal_83e4f20d52e6fcc25982b442c6eed21176bbb2111b58f247d73faa21c487f2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3386e0798593c92b5443d4c1500c99a2a635a043557810f0d0ece6260d2714a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3386e0798593c92b5443d4c1500c99a2a635a043557810f0d0ece6260d2714a1->enter($__internal_3386e0798593c92b5443d4c1500c99a2a635a043557810f0d0ece6260d2714a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3386e0798593c92b5443d4c1500c99a2a635a043557810f0d0ece6260d2714a1->leave($__internal_3386e0798593c92b5443d4c1500c99a2a635a043557810f0d0ece6260d2714a1_prof);

        
        $__internal_83e4f20d52e6fcc25982b442c6eed21176bbb2111b58f247d73faa21c487f2cb->leave($__internal_83e4f20d52e6fcc25982b442c6eed21176bbb2111b58f247d73faa21c487f2cb_prof);

    }

    public function getTemplateName()
    {
        return "JustBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>
", "JustBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/JustBundle/Resources/views/Default/index.html.twig");
    }
}
