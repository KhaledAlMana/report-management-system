<?php

namespace App\Command;

use DI\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;


class InitDB extends Command
{
	private $settings;

	public function __construct(Container $container)
	{
		parent::__construct();
		$this->settings = $container->get('settings');
	}

	protected function configure()
	{
		$this
			// the name of the command (the part after "bin/console")
			->setName('app:init-db')

			// the short description shown while running "php bin/console list"
			->setDescription('Initialize database')

			// the full command description shown when running the command with
			// the "--help" option
			->setHelp('Create database structe and add initial data');
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{   
		$dsn = "{$this->settings['pdo']['engine']}:host={$this->settings['pdo']['host']};dbname={$this->settings['pdo']['database']};charset={$this->settings['pdo']['charset']}";
		$username = $this->settings['pdo']['username'];
		$password = $this->settings['pdo']['password'];

		$dbh = new PDO($dsn, $username, $password, $this->settings['pdo']['option']);
		if (!$dbh) {
			$output->writeLn('Couldn\'t connect to the database [' . $this->settings['pdo']['host']. ']');
			return;
		}

		$dbh->exec('BEGIN TRANSACTION;');

		$queries = [
			"CREATE TABLE `attachment` (
				`attachmentID` int(11) NOT NULL,
				`reportID` int(11) NOT NULL,
				`name` varchar(50) NOT NULL,
				`path` text NOT NULL,
				`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  "CREATE TABLE `group` (
				`groupID` int(11) NOT NULL,
				`name` varchar(255) CHARACTER SET latin1 NOT NULL,
				`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
				`modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  "CREATE TABLE `groupMembers` (
				`groupMemberID` int(11) NOT NULL,
				`groupID` int(11) NOT NULL,
				`userID` int(11) NOT NULL,
				`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  "CREATE TABLE `groupPermission` (
				`reportID` int(11) NOT NULL,
				`groupID` int(11) NOT NULL,
				`canRead` tinyint(2) NOT NULL DEFAULT '1',
				`canEdit` int(11) NOT NULL DEFAULT '0'
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  "CREATE TABLE `report` (
				`reportID` int(11) NOT NULL,
				`title` varchar(50) CHARACTER SET latin1 NOT NULL,
				`description` text CHARACTER SET latin1 NOT NULL,
				`userID` int(11) NOT NULL,
				`isPublic` tinyint(2) DEFAULT '0',
				`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
				`modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  
			  "INSERT INTO `report` (`reportID`, `title`, `description`, `userID`, `isPublic`, `createdAt`, `modifiedAt`) VALUES
			  (1, 'Test', 'lksdnfmlksdn gls/fdn glkfdsn g', 1, 0, '2020-02-06 23:04:46', '2020-02-06 23:04:46');",
			  
			  "CREATE TABLE `reportTags` (
				`reportTagID` int(11) NOT NULL,
				`reportID` int(11) NOT NULL,
				`tagID` int(11) NOT NULL
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  "INSERT INTO `reportTags` (`reportTagID`, `reportID`, `tagID`) VALUES
			  (1, 1, 2),(2, 1, 2);",
			  
			  
			  "CREATE TABLE `tag` (
				`tagID` int(11) NOT NULL,
				`name` varchar(50) NOT NULL
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  
			  "INSERT INTO `tag` (`tagID`, `name`) VALUES
			  (1, 'test'),
			  (2, 'TEST2');",
			  
			  "CREATE TABLE `user` (
				`userID` int(11) NOT NULL,
				`email` varchar(100) CHARACTER SET latin1 NOT NULL,
				`password` varchar(255) CHARACTER SET latin1 NOT NULL,
				`isAdmin` tinyint(2) NOT NULL DEFAULT '0',
				`firstName` varchar(255) CHARACTER SET latin1 NOT NULL,
				`lastName` varchar(255) CHARACTER SET latin1 NOT NULL,
				`createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
				`modifiedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  
			  "INSERT INTO `user` (`userID`, `email`, `password`, `isAdmin`, `firstName`, `lastName`, `createdAt`, `modifiedAt`) VALUES
			  (1, 'admin@domain.com', '$2y$10$6FzPDsYt74GAvCazgAj/s.Z3ig6OY3MviqlEA66x7xOGV9ndFy7ny', 1, 'Khaled', 'Al Mana', '2020-02-04 15:43:42', '2020-02-12 20:28:42');",
			  
			  "CREATE TABLE `userPermission` (
				`reportID` int(11) NOT NULL,
				`userID` int(11) NOT NULL,
				`canRead` tinyint(2) NOT NULL DEFAULT '1',
				`canEdit` int(11) NOT NULL DEFAULT '0'
			  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;",
			  
			  
			  "ALTER TABLE `attachment`
				ADD PRIMARY KEY (`attachmentID`);",
			  
			  "ALTER TABLE `group`
				ADD PRIMARY KEY (`groupID`);",
			  
			  "ALTER TABLE `report`
				ADD PRIMARY KEY (`reportID`);",
			  
			  "ALTER TABLE `reportTags`
				ADD PRIMARY KEY (`reportTagID`);",
			  
			  "ALTER TABLE `tag`
				ADD PRIMARY KEY (`tagID`);",
			  
			  "ALTER TABLE `user`
				ADD PRIMARY KEY (`userID`);",
				
			  "ALTER TABLE `attachment`
				MODIFY `attachmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;",
			  
			  "ALTER TABLE `group`
				MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT;",
			  
			  "ALTER TABLE `report`
				MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;",
			  
			  "ALTER TABLE `reportTags`
				MODIFY `reportTagID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;",
			  
			  "ALTER TABLE `tag`
				MODIFY `tagID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;",
			  "ALTER TABLE `user`
				MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;",
		];

		foreach($queries as $query) {
			if (!$dbh->exec($query)) {
				$output->writeLn('Can\'t execute SQL query "' . $query . '": ' . $dbh->lastErrorMsg());
				$dbh->exec('ROLLBACK;');
				return;
			}
		}
		$output->writeLn("Database structure created");
		$dbh->close();
	}
}
