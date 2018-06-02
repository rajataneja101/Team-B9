package com.teamb9;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication(scanBasePackages={"com"})
public class MicroFundingApplication {

	public static void main(String[] args) {
		SpringApplication.run(MicroFundingApplication.class, args);
	}
}
