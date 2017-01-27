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
        $__internal_eabc8c1bcb0567f7a511324f544398dd50810330857ec223b64a2146ed1fe01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabc8c1bcb0567f7a511324f544398dd50810330857ec223b64a2146ed1fe01b->enter($__internal_eabc8c1bcb0567f7a511324f544398dd50810330857ec223b64a2146ed1fe01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

        $__internal_603cd93342ec95fb3a4b137a3f5f30f445e9f9bbcb63fd1d88846aa8a7d52d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603cd93342ec95fb3a4b137a3f5f30f445e9f9bbcb63fd1d88846aa8a7d52d2b->enter($__internal_603cd93342ec95fb3a4b137a3f5f30f445e9f9bbcb63fd1d88846aa8a7d52d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BunkerBundle:Default:index.html.twig"));

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
        
        $__internal_eabc8c1bcb0567f7a511324f544398dd50810330857ec223b64a2146ed1fe01b->leave($__internal_eabc8c1bcb0567f7a511324f544398dd50810330857ec223b64a2146ed1fe01b_prof);

        
        $__internal_603cd93342ec95fb3a4b137a3f5f30f445e9f9bbcb63fd1d88846aa8a7d52d2b->leave($__internal_603cd93342ec95fb3a4b137a3f5f30f445e9f9bbcb63fd1d88846aa8a7d52d2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfae42356d5b84676b9c407d32f359abe82c72a5cc52b38cb949ce8d9b26d2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfae42356d5b84676b9c407d32f359abe82c72a5cc52b38cb949ce8d9b26d2a8->enter($__internal_bfae42356d5b84676b9c407d32f359abe82c72a5cc52b38cb949ce8d9b26d2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_917a8c9a904edffb2fe2841dbc4b7642c333bc19e26cf28fc8263aee7934ef69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917a8c9a904edffb2fe2841dbc4b7642c333bc19e26cf28fc8263aee7934ef69->enter($__internal_917a8c9a904edffb2fe2841dbc4b7642c333bc19e26cf28fc8263aee7934ef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_917a8c9a904edffb2fe2841dbc4b7642c333bc19e26cf28fc8263aee7934ef69->leave($__internal_917a8c9a904edffb2fe2841dbc4b7642c333bc19e26cf28fc8263aee7934ef69_prof);

        
        $__internal_bfae42356d5b84676b9c407d32f359abe82c72a5cc52b38cb949ce8d9b26d2a8->leave($__internal_bfae42356d5b84676b9c407d32f359abe82c72a5cc52b38cb949ce8d9b26d2a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69639ab01593bae7ac661d0149beef35939b03e65ad5d61f8154e673d3cf5b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69639ab01593bae7ac661d0149beef35939b03e65ad5d61f8154e673d3cf5b89->enter($__internal_69639ab01593bae7ac661d0149beef35939b03e65ad5d61f8154e673d3cf5b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7b6662db9005097add9479957b931f426766b17f1e6543771457b9a4fdd743f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b6662db9005097add9479957b931f426766b17f1e6543771457b9a4fdd743f->enter($__internal_b7b6662db9005097add9479957b931f426766b17f1e6543771457b9a4fdd743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b7b6662db9005097add9479957b931f426766b17f1e6543771457b9a4fdd743f->leave($__internal_b7b6662db9005097add9479957b931f426766b17f1e6543771457b9a4fdd743f_prof);

        
        $__internal_69639ab01593bae7ac661d0149beef35939b03e65ad5d61f8154e673d3cf5b89->leave($__internal_69639ab01593bae7ac661d0149beef35939b03e65ad5d61f8154e673d3cf5b89_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_10598a9502dd62ec2140adb8e42a6e94ab17c80a7c381541b23958c1a9d9526f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10598a9502dd62ec2140adb8e42a6e94ab17c80a7c381541b23958c1a9d9526f->enter($__internal_10598a9502dd62ec2140adb8e42a6e94ab17c80a7c381541b23958c1a9d9526f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8488114418de1b393b14eca71bc9f1f339b36e0a53bce5d5bbe76e873ec636d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8488114418de1b393b14eca71bc9f1f339b36e0a53bce5d5bbe76e873ec636d4->enter($__internal_8488114418de1b393b14eca71bc9f1f339b36e0a53bce5d5bbe76e873ec636d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <h1>SUPRISE MOTHERFUCKER</h1>
    ";
        
        $__internal_8488114418de1b393b14eca71bc9f1f339b36e0a53bce5d5bbe76e873ec636d4->leave($__internal_8488114418de1b393b14eca71bc9f1f339b36e0a53bce5d5bbe76e873ec636d4_prof);

        
        $__internal_10598a9502dd62ec2140adb8e42a6e94ab17c80a7c381541b23958c1a9d9526f->leave($__internal_10598a9502dd62ec2140adb8e42a6e94ab17c80a7c381541b23958c1a9d9526f_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c576e7b42e4b5f98362741852620f18a91fb76ff1d3da4ba816c89ce8260edf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c576e7b42e4b5f98362741852620f18a91fb76ff1d3da4ba816c89ce8260edf0->enter($__internal_c576e7b42e4b5f98362741852620f18a91fb76ff1d3da4ba816c89ce8260edf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4debf522009d28eb224ecf61bf2083d4f8056e8a0a4fd248336cf0c153536b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4debf522009d28eb224ecf61bf2083d4f8056e8a0a4fd248336cf0c153536b4f->enter($__internal_4debf522009d28eb224ecf61bf2083d4f8056e8a0a4fd248336cf0c153536b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4debf522009d28eb224ecf61bf2083d4f8056e8a0a4fd248336cf0c153536b4f->leave($__internal_4debf522009d28eb224ecf61bf2083d4f8056e8a0a4fd248336cf0c153536b4f_prof);

        
        $__internal_c576e7b42e4b5f98362741852620f18a91fb76ff1d3da4ba816c89ce8260edf0->leave($__internal_c576e7b42e4b5f98362741852620f18a91fb76ff1d3da4ba816c89ce8260edf0_prof);

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
</html>", "BunkerBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/ProjetSymfony/src/BunkerBundle/Resources/views/Default/index.html.twig");
    }
}
