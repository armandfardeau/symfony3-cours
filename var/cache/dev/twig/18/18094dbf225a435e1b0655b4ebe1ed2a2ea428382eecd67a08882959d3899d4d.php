<?php

/* BunkerBundle:Default:index.html.twig */
class __TwigTemplate_73bb78eff4de607f8c2c04d0f662a68e03006b850e2d2386f4b778afbffdddb7 extends Twig_Template
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
        $__internal_7894d0bb5e7a222a971e20268f7a7fe2944ca3363d7812c3fe803718c350ce10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7894d0bb5e7a222a971e20268f7a7fe2944ca3363d7812c3fe803718c350ce10->enter($__internal_7894d0bb5e7a222a971e20268f7a7fe2944ca3363d7812c3fe803718c350ce10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_3967ed492fbbe59762b6e8531d621e379b97876f1a75529c0c79eca7862329eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3967ed492fbbe59762b6e8531d621e379b97876f1a75529c0c79eca7862329eb->enter($__internal_3967ed492fbbe59762b6e8531d621e379b97876f1a75529c0c79eca7862329eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

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
        
        $__internal_7894d0bb5e7a222a971e20268f7a7fe2944ca3363d7812c3fe803718c350ce10->leave($__internal_7894d0bb5e7a222a971e20268f7a7fe2944ca3363d7812c3fe803718c350ce10_prof);

        
        $__internal_3967ed492fbbe59762b6e8531d621e379b97876f1a75529c0c79eca7862329eb->leave($__internal_3967ed492fbbe59762b6e8531d621e379b97876f1a75529c0c79eca7862329eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2664eb2961f2e0764a954a08fffff187febc6ea4a37123a6b6bb3cce23f53958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2664eb2961f2e0764a954a08fffff187febc6ea4a37123a6b6bb3cce23f53958->enter($__internal_2664eb2961f2e0764a954a08fffff187febc6ea4a37123a6b6bb3cce23f53958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e79769af7d5de87788d2cbc8f1d9423052c92755a8048c7719ed232b411eea74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79769af7d5de87788d2cbc8f1d9423052c92755a8048c7719ed232b411eea74->enter($__internal_e79769af7d5de87788d2cbc8f1d9423052c92755a8048c7719ed232b411eea74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e79769af7d5de87788d2cbc8f1d9423052c92755a8048c7719ed232b411eea74->leave($__internal_e79769af7d5de87788d2cbc8f1d9423052c92755a8048c7719ed232b411eea74_prof);

        
        $__internal_2664eb2961f2e0764a954a08fffff187febc6ea4a37123a6b6bb3cce23f53958->leave($__internal_2664eb2961f2e0764a954a08fffff187febc6ea4a37123a6b6bb3cce23f53958_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dd411be1a8961e1b1e81063b3d85e30bdf800467cd7836a0732b91a1b5e941a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd411be1a8961e1b1e81063b3d85e30bdf800467cd7836a0732b91a1b5e941a->enter($__internal_0dd411be1a8961e1b1e81063b3d85e30bdf800467cd7836a0732b91a1b5e941a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3022ea27a304b54c20f83ced3fb017b88a7cb5c4c7b9c79eec6a3aab67d75f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3022ea27a304b54c20f83ced3fb017b88a7cb5c4c7b9c79eec6a3aab67d75f22->enter($__internal_3022ea27a304b54c20f83ced3fb017b88a7cb5c4c7b9c79eec6a3aab67d75f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3022ea27a304b54c20f83ced3fb017b88a7cb5c4c7b9c79eec6a3aab67d75f22->leave($__internal_3022ea27a304b54c20f83ced3fb017b88a7cb5c4c7b9c79eec6a3aab67d75f22_prof);

        
        $__internal_0dd411be1a8961e1b1e81063b3d85e30bdf800467cd7836a0732b91a1b5e941a->leave($__internal_0dd411be1a8961e1b1e81063b3d85e30bdf800467cd7836a0732b91a1b5e941a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e964eb90fb23700750c1aec24e030c3655ceb5d154a203e10f45a9fd4f4f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e964eb90fb23700750c1aec24e030c3655ceb5d154a203e10f45a9fd4f4f8b->enter($__internal_d2e964eb90fb23700750c1aec24e030c3655ceb5d154a203e10f45a9fd4f4f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e4fb96435545caf1eaae370bf3dae6475f0c65ef065124a86ad28d165768fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4fb96435545caf1eaae370bf3dae6475f0c65ef065124a86ad28d165768fcc->enter($__internal_8e4fb96435545caf1eaae370bf3dae6475f0c65ef065124a86ad28d165768fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h1>SUPRISE MOTHERFUCKER</h1>
    ";
        
        $__internal_8e4fb96435545caf1eaae370bf3dae6475f0c65ef065124a86ad28d165768fcc->leave($__internal_8e4fb96435545caf1eaae370bf3dae6475f0c65ef065124a86ad28d165768fcc_prof);

        
        $__internal_d2e964eb90fb23700750c1aec24e030c3655ceb5d154a203e10f45a9fd4f4f8b->leave($__internal_d2e964eb90fb23700750c1aec24e030c3655ceb5d154a203e10f45a9fd4f4f8b_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a09ba8c91841655c5e4b713fd6cb229cda69f386d8926e8dd8d39ad21c01ac13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09ba8c91841655c5e4b713fd6cb229cda69f386d8926e8dd8d39ad21c01ac13->enter($__internal_a09ba8c91841655c5e4b713fd6cb229cda69f386d8926e8dd8d39ad21c01ac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e263f1333c4e9eca72fb4af64a2d26705e9860baadfbcd01ba5f91d1331cc0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e263f1333c4e9eca72fb4af64a2d26705e9860baadfbcd01ba5f91d1331cc0a3->enter($__internal_e263f1333c4e9eca72fb4af64a2d26705e9860baadfbcd01ba5f91d1331cc0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e263f1333c4e9eca72fb4af64a2d26705e9860baadfbcd01ba5f91d1331cc0a3->leave($__internal_e263f1333c4e9eca72fb4af64a2d26705e9860baadfbcd01ba5f91d1331cc0a3_prof);

        
        $__internal_a09ba8c91841655c5e4b713fd6cb229cda69f386d8926e8dd8d39ad21c01ac13->leave($__internal_a09ba8c91841655c5e4b713fd6cb229cda69f386d8926e8dd8d39ad21c01ac13_prof);

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
