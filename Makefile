setup:
	# run Gateway containers
	cd Gateway/ && make setup

	# run UserManaging microservice
	cd UserManaging/ && make setup

	# run Tickets microservice
	cd Tickets/ && make setup

	# run MockedThirdPartySeller service
	cd MockedThirdParty/ && make setup