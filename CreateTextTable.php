<?php

require 'vendor/autoload.php';  // Autoload Symfony components

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\BufferedOutput;

    // Example data (you would fetch this from a database in a real app)
    $users = [
        ['ID' => 1, 'Name' => 'John Doe', 'Email' => 'john@example.com'],
        ['ID' => 2, 'Name' => 'Jane Smith', 'Email' => 'jane@example.com'],
        ['ID' => 3, 'Name' => 'Mike Johnson', 'Email' => 'mike@example.com'],
    ];
    
    // Use Symfony's Table component to create a plain text table
    $output = new BufferedOutput();
    $table = new Table($output);
    
    $table->setHeaders(['ID', 'Name', 'Email']);
    
    foreach ($users as $user) {
        $table->addRow([$user['ID'], $user['Name'], $user['Email']]);
    }
    
    $table->render();
    
    // Get the table as a plain text string
    $plainTextTable = $output->fetch();
    
    // Output the plain text table
    echo $plainTextTable;
