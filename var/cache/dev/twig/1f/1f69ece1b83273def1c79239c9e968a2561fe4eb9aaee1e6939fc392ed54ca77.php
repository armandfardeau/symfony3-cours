<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_a58897a2c2db64f0f7376039807663fd67023d475ef5c3d524878e08fd3eca74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eb159a3b34cc1b433327595c4b5b5e31aaeec7fd7caa5762082a00ff82aeb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb159a3b34cc1b433327595c4b5b5e31aaeec7fd7caa5762082a00ff82aeb3c->enter($__internal_5eb159a3b34cc1b433327595c4b5b5e31aaeec7fd7caa5762082a00ff82aeb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_c4104ae3e15940d8c79398f9389a486708ac2c69821f1c36f32216126cf3b93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4104ae3e15940d8c79398f9389a486708ac2c69821f1c36f32216126cf3b93e->enter($__internal_c4104ae3e15940d8c79398f9389a486708ac2c69821f1c36f32216126cf3b93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_5eb159a3b34cc1b433327595c4b5b5e31aaeec7fd7caa5762082a00ff82aeb3c->leave($__internal_5eb159a3b34cc1b433327595c4b5b5e31aaeec7fd7caa5762082a00ff82aeb3c_prof);

        
        $__internal_c4104ae3e15940d8c79398f9389a486708ac2c69821f1c36f32216126cf3b93e->leave($__internal_c4104ae3e15940d8c79398f9389a486708ac2c69821f1c36f32216126cf3b93e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_04cf16b4459f8c41d2188596a81baace3873a1d16df4372e5e5dc8c348dae30a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04cf16b4459f8c41d2188596a81baace3873a1d16df4372e5e5dc8c348dae30a->enter($__internal_04cf16b4459f8c41d2188596a81baace3873a1d16df4372e5e5dc8c348dae30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_e44306b2a02720f61b0187c18f7e28fb60a39a10d232abf60968089855eb6fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44306b2a02720f61b0187c18f7e28fb60a39a10d232abf60968089855eb6fcf->enter($__internal_e44306b2a02720f61b0187c18f7e28fb60a39a10d232abf60968089855eb6fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_e44306b2a02720f61b0187c18f7e28fb60a39a10d232abf60968089855eb6fcf->leave($__internal_e44306b2a02720f61b0187c18f7e28fb60a39a10d232abf60968089855eb6fcf_prof);

        
        $__internal_04cf16b4459f8c41d2188596a81baace3873a1d16df4372e5e5dc8c348dae30a->leave($__internal_04cf16b4459f8c41d2188596a81baace3873a1d16df4372e5e5dc8c348dae30a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_06ff956090e596e943bbb42b7d53d2b1b0b16476c38daa05630f7350fdac3f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ff956090e596e943bbb42b7d53d2b1b0b16476c38daa05630f7350fdac3f9b->enter($__internal_06ff956090e596e943bbb42b7d53d2b1b0b16476c38daa05630f7350fdac3f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1a75d5f9a8e696da8874734710afd8b636c7bf95c2cac8bdfe0d3b837bdfc833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a75d5f9a8e696da8874734710afd8b636c7bf95c2cac8bdfe0d3b837bdfc833->enter($__internal_1a75d5f9a8e696da8874734710afd8b636c7bf95c2cac8bdfe0d3b837bdfc833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1a75d5f9a8e696da8874734710afd8b636c7bf95c2cac8bdfe0d3b837bdfc833->leave($__internal_1a75d5f9a8e696da8874734710afd8b636c7bf95c2cac8bdfe0d3b837bdfc833_prof);

        
        $__internal_06ff956090e596e943bbb42b7d53d2b1b0b16476c38daa05630f7350fdac3f9b->leave($__internal_06ff956090e596e943bbb42b7d53d2b1b0b16476c38daa05630f7350fdac3f9b_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_883637636e63b7d3e50d0f874cee7c0bf9d99d6ad483bc5502fb1f2872a724b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883637636e63b7d3e50d0f874cee7c0bf9d99d6ad483bc5502fb1f2872a724b7->enter($__internal_883637636e63b7d3e50d0f874cee7c0bf9d99d6ad483bc5502fb1f2872a724b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4e633156ba84229206f6a206331d564e4f9ca3d44c5239932edc9d8bba0d576d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e633156ba84229206f6a206331d564e4f9ca3d44c5239932edc9d8bba0d576d->enter($__internal_4e633156ba84229206f6a206331d564e4f9ca3d44c5239932edc9d8bba0d576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_4e633156ba84229206f6a206331d564e4f9ca3d44c5239932edc9d8bba0d576d->leave($__internal_4e633156ba84229206f6a206331d564e4f9ca3d44c5239932edc9d8bba0d576d_prof);

        
        $__internal_883637636e63b7d3e50d0f874cee7c0bf9d99d6ad483bc5502fb1f2872a724b7->leave($__internal_883637636e63b7d3e50d0f874cee7c0bf9d99d6ad483bc5502fb1f2872a724b7_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c043a05041dc49210295e17ff66dc30b3e11ed43b9ea4204a490d284a6fe0d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c043a05041dc49210295e17ff66dc30b3e11ed43b9ea4204a490d284a6fe0d26->enter($__internal_c043a05041dc49210295e17ff66dc30b3e11ed43b9ea4204a490d284a6fe0d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3c505311aa719d451e53087f360701bc046896bd49f15789a881f0ad415d2715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c505311aa719d451e53087f360701bc046896bd49f15789a881f0ad415d2715->enter($__internal_3c505311aa719d451e53087f360701bc046896bd49f15789a881f0ad415d2715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_3c505311aa719d451e53087f360701bc046896bd49f15789a881f0ad415d2715->leave($__internal_3c505311aa719d451e53087f360701bc046896bd49f15789a881f0ad415d2715_prof);

        
        $__internal_c043a05041dc49210295e17ff66dc30b3e11ed43b9ea4204a490d284a6fe0d26->leave($__internal_c043a05041dc49210295e17ff66dc30b3e11ed43b9ea4204a490d284a6fe0d26_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7a1f4ef7c66b2abbb9504218107f5eee4355f7cab4ed38182754b8e1798d0f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1f4ef7c66b2abbb9504218107f5eee4355f7cab4ed38182754b8e1798d0f6c->enter($__internal_7a1f4ef7c66b2abbb9504218107f5eee4355f7cab4ed38182754b8e1798d0f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_949ebb26549611820bc73adcb473b2385b0b31bae0efe0ed16db9a03080acef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949ebb26549611820bc73adcb473b2385b0b31bae0efe0ed16db9a03080acef6->enter($__internal_949ebb26549611820bc73adcb473b2385b0b31bae0efe0ed16db9a03080acef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_949ebb26549611820bc73adcb473b2385b0b31bae0efe0ed16db9a03080acef6->leave($__internal_949ebb26549611820bc73adcb473b2385b0b31bae0efe0ed16db9a03080acef6_prof);

        
        $__internal_7a1f4ef7c66b2abbb9504218107f5eee4355f7cab4ed38182754b8e1798d0f6c->leave($__internal_7a1f4ef7c66b2abbb9504218107f5eee4355f7cab4ed38182754b8e1798d0f6c_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a3794781d218cb46a71b592d28ef1e15b0256c874ffb8ea87c8d41f88393f81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3794781d218cb46a71b592d28ef1e15b0256c874ffb8ea87c8d41f88393f81d->enter($__internal_a3794781d218cb46a71b592d28ef1e15b0256c874ffb8ea87c8d41f88393f81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_512ece0abe5dae10968dcfaae27103df163fd8ceb51c303b88329e743a26ddfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512ece0abe5dae10968dcfaae27103df163fd8ceb51c303b88329e743a26ddfd->enter($__internal_512ece0abe5dae10968dcfaae27103df163fd8ceb51c303b88329e743a26ddfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_512ece0abe5dae10968dcfaae27103df163fd8ceb51c303b88329e743a26ddfd->leave($__internal_512ece0abe5dae10968dcfaae27103df163fd8ceb51c303b88329e743a26ddfd_prof);

        
        $__internal_a3794781d218cb46a71b592d28ef1e15b0256c874ffb8ea87c8d41f88393f81d->leave($__internal_a3794781d218cb46a71b592d28ef1e15b0256c874ffb8ea87c8d41f88393f81d_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_39f9f2d9af39e5a19fa954f56f1fe641592bdba6e55f9ae4d8d20c0d963f517f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f9f2d9af39e5a19fa954f56f1fe641592bdba6e55f9ae4d8d20c0d963f517f->enter($__internal_39f9f2d9af39e5a19fa954f56f1fe641592bdba6e55f9ae4d8d20c0d963f517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_0e26879bce6deedb74657f32a3a6a640903178e1b3ead6a9d8fc55ce70a03af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e26879bce6deedb74657f32a3a6a640903178e1b3ead6a9d8fc55ce70a03af6->enter($__internal_0e26879bce6deedb74657f32a3a6a640903178e1b3ead6a9d8fc55ce70a03af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0e26879bce6deedb74657f32a3a6a640903178e1b3ead6a9d8fc55ce70a03af6->leave($__internal_0e26879bce6deedb74657f32a3a6a640903178e1b3ead6a9d8fc55ce70a03af6_prof);

        
        $__internal_39f9f2d9af39e5a19fa954f56f1fe641592bdba6e55f9ae4d8d20c0d963f517f->leave($__internal_39f9f2d9af39e5a19fa954f56f1fe641592bdba6e55f9ae4d8d20c0d963f517f_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_99ed1d064d76eff9209c1f17096d3575d0e3ca1e7aa78e8a906620c4afab01a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ed1d064d76eff9209c1f17096d3575d0e3ca1e7aa78e8a906620c4afab01a0->enter($__internal_99ed1d064d76eff9209c1f17096d3575d0e3ca1e7aa78e8a906620c4afab01a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_bf37e477314c7f106effcb5b599b075205e54c6c2dfc07bf70acefb08d162ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf37e477314c7f106effcb5b599b075205e54c6c2dfc07bf70acefb08d162ca3->enter($__internal_bf37e477314c7f106effcb5b599b075205e54c6c2dfc07bf70acefb08d162ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bf37e477314c7f106effcb5b599b075205e54c6c2dfc07bf70acefb08d162ca3->leave($__internal_bf37e477314c7f106effcb5b599b075205e54c6c2dfc07bf70acefb08d162ca3_prof);

        
        $__internal_99ed1d064d76eff9209c1f17096d3575d0e3ca1e7aa78e8a906620c4afab01a0->leave($__internal_99ed1d064d76eff9209c1f17096d3575d0e3ca1e7aa78e8a906620c4afab01a0_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ec96693000504d7211d3091f71e4533e02f6bac2ff5841d3d8915dc6f46dcd6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec96693000504d7211d3091f71e4533e02f6bac2ff5841d3d8915dc6f46dcd6b->enter($__internal_ec96693000504d7211d3091f71e4533e02f6bac2ff5841d3d8915dc6f46dcd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_cad8a12d8e03a640dc170ea36644c0504271aa69343722858670a11080bcbe6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad8a12d8e03a640dc170ea36644c0504271aa69343722858670a11080bcbe6e->enter($__internal_cad8a12d8e03a640dc170ea36644c0504271aa69343722858670a11080bcbe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cad8a12d8e03a640dc170ea36644c0504271aa69343722858670a11080bcbe6e->leave($__internal_cad8a12d8e03a640dc170ea36644c0504271aa69343722858670a11080bcbe6e_prof);

        
        $__internal_ec96693000504d7211d3091f71e4533e02f6bac2ff5841d3d8915dc6f46dcd6b->leave($__internal_ec96693000504d7211d3091f71e4533e02f6bac2ff5841d3d8915dc6f46dcd6b_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_6492b27aba1b0c82c03a6143722b5db2b2c1cace958d78ef3f9147b8bd93e139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6492b27aba1b0c82c03a6143722b5db2b2c1cace958d78ef3f9147b8bd93e139->enter($__internal_6492b27aba1b0c82c03a6143722b5db2b2c1cace958d78ef3f9147b8bd93e139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_de89bf0f497ee7384a9ce552e3674a3bf8013291700defca7aebc0a386c7f7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de89bf0f497ee7384a9ce552e3674a3bf8013291700defca7aebc0a386c7f7b9->enter($__internal_de89bf0f497ee7384a9ce552e3674a3bf8013291700defca7aebc0a386c7f7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_de89bf0f497ee7384a9ce552e3674a3bf8013291700defca7aebc0a386c7f7b9->leave($__internal_de89bf0f497ee7384a9ce552e3674a3bf8013291700defca7aebc0a386c7f7b9_prof);

        
        $__internal_6492b27aba1b0c82c03a6143722b5db2b2c1cace958d78ef3f9147b8bd93e139->leave($__internal_6492b27aba1b0c82c03a6143722b5db2b2c1cace958d78ef3f9147b8bd93e139_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
