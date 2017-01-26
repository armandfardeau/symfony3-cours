<?php

/* JustBundle:Default:index.html.twig */
class __TwigTemplate_5d8473eb7b1909e74e7e98d2d405e5651c65bfe8b500ea5a79dc9227aedf57ae extends Twig_Template
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
        $__internal_d69995985633a15bf62a9c0f8622e99b98b8d7177b77fc0756cdaf1229cf9a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69995985633a15bf62a9c0f8622e99b98b8d7177b77fc0756cdaf1229cf9a86->enter($__internal_d69995985633a15bf62a9c0f8622e99b98b8d7177b77fc0756cdaf1229cf9a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

        $__internal_503713062836d662f2bd4af3cfd2a167c9b19a0bfc63efed226809f32eec0c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503713062836d662f2bd4af3cfd2a167c9b19a0bfc63efed226809f32eec0c8a->enter($__internal_503713062836d662f2bd4af3cfd2a167c9b19a0bfc63efed226809f32eec0c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JustBundle:Default:index.html.twig"));

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
        
        $__internal_d69995985633a15bf62a9c0f8622e99b98b8d7177b77fc0756cdaf1229cf9a86->leave($__internal_d69995985633a15bf62a9c0f8622e99b98b8d7177b77fc0756cdaf1229cf9a86_prof);

        
        $__internal_503713062836d662f2bd4af3cfd2a167c9b19a0bfc63efed226809f32eec0c8a->leave($__internal_503713062836d662f2bd4af3cfd2a167c9b19a0bfc63efed226809f32eec0c8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e6d0ff05b71e80b7a827f8ba8963a59c64c8a6b5d1acd4df070816b84c97b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e6d0ff05b71e80b7a827f8ba8963a59c64c8a6b5d1acd4df070816b84c97b10->enter($__internal_7e6d0ff05b71e80b7a827f8ba8963a59c64c8a6b5d1acd4df070816b84c97b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c013ccda488a73b3fe5a5e0109a28f4b72948dbfbe7784bd2ad836781dc98a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c013ccda488a73b3fe5a5e0109a28f4b72948dbfbe7784bd2ad836781dc98a5->enter($__internal_1c013ccda488a73b3fe5a5e0109a28f4b72948dbfbe7784bd2ad836781dc98a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c013ccda488a73b3fe5a5e0109a28f4b72948dbfbe7784bd2ad836781dc98a5->leave($__internal_1c013ccda488a73b3fe5a5e0109a28f4b72948dbfbe7784bd2ad836781dc98a5_prof);

        
        $__internal_7e6d0ff05b71e80b7a827f8ba8963a59c64c8a6b5d1acd4df070816b84c97b10->leave($__internal_7e6d0ff05b71e80b7a827f8ba8963a59c64c8a6b5d1acd4df070816b84c97b10_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5d657e0548636c1126613ab23f6c633bdc3c1382db1aa9c238ee3fc9e8247b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d657e0548636c1126613ab23f6c633bdc3c1382db1aa9c238ee3fc9e8247b1->enter($__internal_c5d657e0548636c1126613ab23f6c633bdc3c1382db1aa9c238ee3fc9e8247b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7a874e42e17cab9ede2024aaeaaae16cf69c1a04ac5e08fd921105ecc6c9ad24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a874e42e17cab9ede2024aaeaaae16cf69c1a04ac5e08fd921105ecc6c9ad24->enter($__internal_7a874e42e17cab9ede2024aaeaaae16cf69c1a04ac5e08fd921105ecc6c9ad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a874e42e17cab9ede2024aaeaaae16cf69c1a04ac5e08fd921105ecc6c9ad24->leave($__internal_7a874e42e17cab9ede2024aaeaaae16cf69c1a04ac5e08fd921105ecc6c9ad24_prof);

        
        $__internal_c5d657e0548636c1126613ab23f6c633bdc3c1382db1aa9c238ee3fc9e8247b1->leave($__internal_c5d657e0548636c1126613ab23f6c633bdc3c1382db1aa9c238ee3fc9e8247b1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_53a9b3997a88adac0672c83206a27241413c4d08e713b03f556286b529fa3d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a9b3997a88adac0672c83206a27241413c4d08e713b03f556286b529fa3d4d->enter($__internal_53a9b3997a88adac0672c83206a27241413c4d08e713b03f556286b529fa3d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd14b899c987625ccf64b77b2cd88db21737235692dd3de4f239828e96eb0fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd14b899c987625ccf64b77b2cd88db21737235692dd3de4f239828e96eb0fb8->enter($__internal_bd14b899c987625ccf64b77b2cd88db21737235692dd3de4f239828e96eb0fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd14b899c987625ccf64b77b2cd88db21737235692dd3de4f239828e96eb0fb8->leave($__internal_bd14b899c987625ccf64b77b2cd88db21737235692dd3de4f239828e96eb0fb8_prof);

        
        $__internal_53a9b3997a88adac0672c83206a27241413c4d08e713b03f556286b529fa3d4d->leave($__internal_53a9b3997a88adac0672c83206a27241413c4d08e713b03f556286b529fa3d4d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81dd988ce82db8b1d7bccad761b962cbb20b4cbc47ee3b652afeb661a7f2e75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81dd988ce82db8b1d7bccad761b962cbb20b4cbc47ee3b652afeb661a7f2e75e->enter($__internal_81dd988ce82db8b1d7bccad761b962cbb20b4cbc47ee3b652afeb661a7f2e75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2eba19487f85195be521a437ca6bbcf66d19970b8d1261d15629c2eea7494ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eba19487f85195be521a437ca6bbcf66d19970b8d1261d15629c2eea7494ca5->enter($__internal_2eba19487f85195be521a437ca6bbcf66d19970b8d1261d15629c2eea7494ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2eba19487f85195be521a437ca6bbcf66d19970b8d1261d15629c2eea7494ca5->leave($__internal_2eba19487f85195be521a437ca6bbcf66d19970b8d1261d15629c2eea7494ca5_prof);

        
        $__internal_81dd988ce82db8b1d7bccad761b962cbb20b4cbc47ee3b652afeb661a7f2e75e->leave($__internal_81dd988ce82db8b1d7bccad761b962cbb20b4cbc47ee3b652afeb661a7f2e75e_prof);

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
