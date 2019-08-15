<?php

return [
    /*
     * Token gerado pelo painel do boleto facil
     */
    'token' => 'C9F209F06604CF2909E7F4622610E437A3644E3370E20B426150301FD05DA561',

    /*
     * Controlador do endpoint para produção ou para sandbox
     */
    'sandbox' => env('BOLETO_FACIL_SANDBOX'),

    /*
     * Url de notificação para o boleto fácil
     * Se caso for definido na criação de um PaymentResource o NotificationUrl, o mesmo irá sobrescrever a url definida aqui
     * Sempre é bom deixar uma url padrão para caso ocorra algum erro ao recuperar a NotificationUrl do PaymentResource
     */
    'notification_url' => '',
];