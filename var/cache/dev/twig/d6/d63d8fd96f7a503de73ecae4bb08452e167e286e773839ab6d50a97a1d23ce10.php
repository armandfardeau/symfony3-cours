<?php

/* BunkerBundle:Default:index.html.twig */
class __TwigTemplate_3357210ec3cd9d8b40ac23e5b6daa33ec9b969edfa71ecf3082b5ee0a51af3b7 extends Twig_Template
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
        $__internal_4f4e228d1eea322701b7d76c436a9715a850cb3aa9cce956d00d48ede28b2798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4e228d1eea322701b7d76c436a9715a850cb3aa9cce956d00d48ede28b2798->enter($__internal_4f4e228d1eea322701b7d76c436a9715a850cb3aa9cce956d00d48ede28b2798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_ae59e7d1bed792a3cad3ba4d9724efd1e284d6943b7b283209aadd0c06ca15a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae59e7d1bed792a3cad3ba4d9724efd1e284d6943b7b283209aadd0c06ca15a7->enter($__internal_ae59e7d1bed792a3cad3ba4d9724efd1e284d6943b7b283209aadd0c06ca15a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

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
    <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\"
</head>
<body>
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</body>
</html>";
        
        $__internal_4f4e228d1eea322701b7d76c436a9715a850cb3aa9cce956d00d48ede28b2798->leave($__internal_4f4e228d1eea322701b7d76c436a9715a850cb3aa9cce956d00d48ede28b2798_prof);

        
        $__internal_ae59e7d1bed792a3cad3ba4d9724efd1e284d6943b7b283209aadd0c06ca15a7->leave($__internal_ae59e7d1bed792a3cad3ba4d9724efd1e284d6943b7b283209aadd0c06ca15a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3c8406654ebcd9bde146413ab1581574d41cce06d6a9d5956af44f13b5d89d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c8406654ebcd9bde146413ab1581574d41cce06d6a9d5956af44f13b5d89d7->enter($__internal_f3c8406654ebcd9bde146413ab1581574d41cce06d6a9d5956af44f13b5d89d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e722ab408d53c35b22c9cffcf669e0360e5cc6310a18227cfee6072856a335b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e722ab408d53c35b22c9cffcf669e0360e5cc6310a18227cfee6072856a335b->enter($__internal_0e722ab408d53c35b22c9cffcf669e0360e5cc6310a18227cfee6072856a335b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0e722ab408d53c35b22c9cffcf669e0360e5cc6310a18227cfee6072856a335b->leave($__internal_0e722ab408d53c35b22c9cffcf669e0360e5cc6310a18227cfee6072856a335b_prof);

        
        $__internal_f3c8406654ebcd9bde146413ab1581574d41cce06d6a9d5956af44f13b5d89d7->leave($__internal_f3c8406654ebcd9bde146413ab1581574d41cce06d6a9d5956af44f13b5d89d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3132e71cb71815d5a7e6261a890038511e79961e699e3870f210f1602d92a969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3132e71cb71815d5a7e6261a890038511e79961e699e3870f210f1602d92a969->enter($__internal_3132e71cb71815d5a7e6261a890038511e79961e699e3870f210f1602d92a969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ceab10e6cc20c5327a4cc405e8155a2ed1c63b11aaf08f66d4a9500d83e5dfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceab10e6cc20c5327a4cc405e8155a2ed1c63b11aaf08f66d4a9500d83e5dfae->enter($__internal_ceab10e6cc20c5327a4cc405e8155a2ed1c63b11aaf08f66d4a9500d83e5dfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ceab10e6cc20c5327a4cc405e8155a2ed1c63b11aaf08f66d4a9500d83e5dfae->leave($__internal_ceab10e6cc20c5327a4cc405e8155a2ed1c63b11aaf08f66d4a9500d83e5dfae_prof);

        
        $__internal_3132e71cb71815d5a7e6261a890038511e79961e699e3870f210f1602d92a969->leave($__internal_3132e71cb71815d5a7e6261a890038511e79961e699e3870f210f1602d92a969_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad4404bbc39cbbc5709cb1afef689b98cf7f143da1d716cff8c9a583f712de23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4404bbc39cbbc5709cb1afef689b98cf7f143da1d716cff8c9a583f712de23->enter($__internal_ad4404bbc39cbbc5709cb1afef689b98cf7f143da1d716cff8c9a583f712de23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57dcdd49aae0118583667dee2ab26495db4a46e54d6bd61e9080ce01df37fcfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dcdd49aae0118583667dee2ab26495db4a46e54d6bd61e9080ce01df37fcfe->enter($__internal_57dcdd49aae0118583667dee2ab26495db4a46e54d6bd61e9080ce01df37fcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h1>SUPRISE MOTHERFUCKER</h1>
    ";
        
        $__internal_57dcdd49aae0118583667dee2ab26495db4a46e54d6bd61e9080ce01df37fcfe->leave($__internal_57dcdd49aae0118583667dee2ab26495db4a46e54d6bd61e9080ce01df37fcfe_prof);

        
        $__internal_ad4404bbc39cbbc5709cb1afef689b98cf7f143da1d716cff8c9a583f712de23->leave($__internal_ad4404bbc39cbbc5709cb1afef689b98cf7f143da1d716cff8c9a583f712de23_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8a5bf058b62e7208a4252e8eff54bbdf9de41e11c678337078db3971fc39605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a5bf058b62e7208a4252e8eff54bbdf9de41e11c678337078db3971fc39605->enter($__internal_d8a5bf058b62e7208a4252e8eff54bbdf9de41e11c678337078db3971fc39605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e244e681d2c03d6c97471a4722b3859626538ee629bab9cf0a90985bdca97b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e244e681d2c03d6c97471a4722b3859626538ee629bab9cf0a90985bdca97b8c->enter($__internal_e244e681d2c03d6c97471a4722b3859626538ee629bab9cf0a90985bdca97b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e244e681d2c03d6c97471a4722b3859626538ee629bab9cf0a90985bdca97b8c->leave($__internal_e244e681d2c03d6c97471a4722b3859626538ee629bab9cf0a90985bdca97b8c_prof);

        
        $__internal_d8a5bf058b62e7208a4252e8eff54bbdf9de41e11c678337078db3971fc39605->leave($__internal_d8a5bf058b62e7208a4252e8eff54bbdf9de41e11c678337078db3971fc39605_prof);

    }

    public function getTemplateName()
    {
        return "BunkerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 14,  109 => 12,  100 => 11,  83 => 6,  65 => 5,  54 => 15,  51 => 14,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <link rel=\"stylesheet\" href=\"/css/bootstrap-3.3.7-dist/css/bootstrap.css\"
</head>
<body>
    {% block body %}
        <h1>SUPRISE MOTHERFUCKER</h1>
    {% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>", "BunkerBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/BunkerBundle/Resources/views/Default/index.html.twig");
    }
}
