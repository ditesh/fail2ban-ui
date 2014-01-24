<?php

class IpResourceController extends BaseResourceController {

    /* Ip authentication
     */
    public function get($request, $response, $session) {

        $retval = $this->model->get($request->ip);
        $response->json($retval);

    }
}
