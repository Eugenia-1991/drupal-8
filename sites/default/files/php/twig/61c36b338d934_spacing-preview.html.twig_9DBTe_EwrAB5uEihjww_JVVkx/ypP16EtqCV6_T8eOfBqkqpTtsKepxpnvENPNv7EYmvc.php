<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/bootstrap_styles/templates/spacing-preview.html.twig */
class __TwigTemplate_ba4813678fa5e50f2b7c6f0e9be7e25f354913b42e2470c85749f2054f40d474 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 10, "t" => 15];
        $functions = ["attach_library" => 10];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 9
        echo "
";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bootstrap_styles/plugins_groups.spacing.spacing_preview"), "html", null, true);
        echo "

<div class=\"spacing-preview\">

  <div class=\"preview-box margin-box\">
    <span class=\"title\">";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Margin"));
        echo "</span>
    <span class=\"left margin-left\">0</span>
    <span class=\"top margin-top\">0</span>
    <span class=\"right margin-right\">0</span>
    <span class=\"bottom margin-bottom\">0</span>


  <div class=\"preview-box padding-box\">
    <span class=\"title\">";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Padding"));
        echo "</span>
    <span class=\"left padding-left\">0</span>
    <span class=\"top padding-top\">0</span>
    <span class=\"right padding-right\">0</span>
    <span class=\"bottom padding-bottom\">0</span>
  </div>
  </div>

</div>

<div id=\"bs_spacing_preview_calc\"></div> 
";
    }

    public function getTemplateName()
    {
        return "modules/bootstrap_styles/templates/spacing-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  66 => 15,  58 => 10,  55 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/bootstrap_styles/templates/spacing-preview.html.twig", "C:\\wamp64\\www\\recetas\\modules\\bootstrap_styles\\templates\\spacing-preview.html.twig");
    }
}
