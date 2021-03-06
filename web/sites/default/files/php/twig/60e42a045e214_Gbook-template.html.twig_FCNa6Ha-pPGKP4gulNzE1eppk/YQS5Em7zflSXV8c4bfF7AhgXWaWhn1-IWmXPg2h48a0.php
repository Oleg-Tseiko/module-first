<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/anzy/templates/Gbook-template.html.twig */
class __TwigTemplate_103066da8d833cc0bd61113a1621a5db25d9796c634deb836fcfd928d5469c46 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h4>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hello! You can add here your review.")));
        echo "</h4>
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 2, $this->source), "html", null, true));
        echo "
<h4>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("You can see list of all reviews here.")));
        echo "</h4>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "  <div class=\"row underline_gbook\">
    <div class=\"col-md-6\">
      <div class=\"row\">
        <div class=\"col-sm-6\">
          ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["item"], "avatar", [], "any", false, false, true, 9)) {
                // line 10
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "avatar", [], "any", false, false, true, 10), 10, $this->source), "html", null, true));
                echo "\" target=\"_blank\" class=\"avatar-book\"><img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "avatar", [], "any", false, false, true, 10), 10, $this->source), "html", null, true));
                echo "\" alt=\"user profile image\"></a></div>
          ";
            } else {
                // line 12
                echo "        <a href=\"/modules/custom/anzy/img/default-user-avatar-300x293.png\" target=\"_blank\" class=\"avatar-book\"><img src=\"/modules/custom/anzy/img/default-user-avatar-300x293.png\" alt=\"user profile image\"></a></div>
          ";
            }
            // line 14
            echo "        <div class=\"col-sm-6\">
          <p>";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true));
            echo "</p>
          <p><span>";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submitted:")));
            echo " </span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "created", [], "any", false, false, true, 16), 16, $this->source), "html", null, true));
            echo "</p>
        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <p><span>";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact:")));
            echo "</span></p>
      <p>";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "mail", [], "any", false, false, true, 22), 22, $this->source), "html", null, true));
            echo "</p>
      <p>";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, true, 23), 23, $this->source), "html", null, true));
            echo "</p>
    </div>
    <div class=\"col-md-6\">
      ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 26)) {
                // line 27
                echo "      <div class=\"image-container\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 27), 27, $this->source), "html", null, true));
                echo "\" target=\"_blank\"><img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 27), 27, $this->source), "html", null, true));
                echo "\" alt=\"user image\"></a></div>
      ";
            }
            // line 29
            echo "    </div>
    <div class=\"col-md-6\">
      <p>";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "comment", [], "any", false, false, true, 31), 31, $this->source), "html", null, true));
            echo "</p>
      ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasPermission", [0 => "administer nodes"], "method", false, false, true, 32)) {
                // line 33
                echo "        <a href=\"/admin/anzy/gbookDel/";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 33), 33, $this->source), "html", null, true));
                echo "?destination=";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dest"] ?? null), 33, $this->source), "html", null, true));
                echo "\" class=\"deleteGbook use-ajax\" data-dialog-type=\"modal\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Delete")));
                echo "</a>
        <a href=\"/admin/anzy/gbookChange/";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true));
                echo "?destination=";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dest"] ?? null), 34, $this->source), "html", null, true));
                echo "\" class=\"deleteGbook\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit")));
                echo "</a>
      ";
            }
            // line 36
            echo "    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/anzy/templates/Gbook-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 36,  136 => 34,  127 => 33,  125 => 32,  121 => 31,  117 => 29,  109 => 27,  107 => 26,  101 => 23,  97 => 22,  93 => 21,  83 => 16,  79 => 15,  76 => 14,  72 => 12,  64 => 10,  62 => 9,  56 => 5,  52 => 4,  48 => 3,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/anzy/templates/Gbook-template.html.twig", "/var/www/web/modules/custom/anzy/templates/Gbook-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "if" => 9);
        static $filters = array("trans" => 1, "escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['trans', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
