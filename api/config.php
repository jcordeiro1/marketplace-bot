<?php
// /api/config.php
return [
  'base_domain' => 'jc.tec.br', // <<< TROQUE AQUI

  // Banco MASTER (cadastro de tenants)
  'master_db' => [
    'host' => 'localhost',
    'name' => 'jctecbr_master',
    'user' => 'jctecbr_master',
    'pass' => 'JJacy@140277',
    'charset' => 'utf8mb4',
  ],
  
  'admin' => [
  'token' => '$2y$10$DSZZFuqrroQRrokNDFWES.W5DljmE2drSM8IdiDhqENVdgrBrttMu',
],

  'paths' => [
    'storage_root' => __DIR__ . '/../storage',  // fora de /public
    'ffmpeg' => '/usr/bin/ffmpeg',              // ajuste se necessário
  ],

  // Segurança básica
  'security' => [
    'allowed_video_ext' => ['mp4','mov','m4v','webm'],
    'max_upload_mb' => 250,
  ],
];
