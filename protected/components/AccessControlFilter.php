<?php

class AccessControlFilter extends CFilter
{
    protected function preFilter($filterChain)
    {
        $controller = $filterChain->controller;
        $action = $filterChain->action;
        
        $roles = array();
        
        // Definisikan akses untuk setiap role
        $accessRules = array(
            'admin' => array('*'), // Akses semua
            'petugas' => array('pendaftaran/*', 'pasien/*'),
            'dokter' => array('tindakan/*', 'resep/*'),
            'kasir' => array('pembayaran/*'),
        );
        
        $userRole = Yii::app()->user->getState('role');
        
        if(!isset($accessRules[$userRole]) || 
           !in_array($controller->id.'/'.$action->id, $accessRules[$userRole]) &&
           !in_array($controller->id.'/*', $accessRules[$userRole]))
        {
            throw new CHttpException(403, 'Anda tidak memiliki akses ke halaman ini.');
        }
        
        return true;
    }
}