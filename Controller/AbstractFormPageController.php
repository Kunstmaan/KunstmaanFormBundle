<?php

namespace Kunstmaan\FormBundle\Controller;

use Kunstmaan\NodeBundle\Helper\RenderContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @deprecated since KunstmaanFormBundle 5.9 and will be removed in KunstmaanFormBundle 6.0.
 */
class AbstractFormPageController extends Controller
{
    public function serviceAction(Request $request)
    {
        $thanksParam = $request->get('thanks');
        $entity = $request->attributes->get('_entity');
        $context = [
            'nodetranslation' => $request->attributes->get('_nodeTranslation'),
            'slug' => $request->attributes->get('url'),
            'page' => $entity,
            'resource' => $entity,
        ];

        if (!empty($thanksParam)) {
            $context['thanks'] = true;
        }

        $renderContext = new RenderContext($context);
        $result = $this->container->get('kunstmaan_form.form_handler')->handleForm($entity, $request, $renderContext);
        if ($result instanceof Response) {
            return $result;
        }

        $request->attributes->set('_renderContext', $renderContext->getArrayCopy());
    }
}
