package com.teamb9.controller;

import javax.validation.Valid;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Component;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.teamb9.dto.GlobalResponseDTO;
import com.teamb9.dto.PasswordDTO;
import com.teamb9.dto.UserDetailsDTO;
import com.teamb9.dto.UserResponseDTO;
import com.teamb9.exception.CustomBadRequestException;
import com.teamb9.exception.CustomInternalServerException;
import com.teamb9.exception.CustomNotFoundException;
import com.teamb9.service.UserService;

@RestController
@Controller
@Component 
@RequestMapping("/api/users")
public class UserController {
	
	private static final Logger logger = LoggerFactory
			.getLogger(UserController.class);
	
	@Autowired
	private UserService userService;
	
	@PostMapping("/register")
	public ResponseEntity<GlobalResponseDTO> registerUser(@Valid @RequestBody UserDetailsDTO userDetailsDTO) 
			throws CustomInternalServerException {
		userService.createUser(userDetailsDTO);
		GlobalResponseDTO globalResponseDTO = new GlobalResponseDTO();
		globalResponseDTO.setMessage("user registered successfully");
		return ResponseEntity.status(HttpStatus.CREATED).body(globalResponseDTO);
	}
	
	@PostMapping("/login/{emailId}")
	public ResponseEntity<UserResponseDTO> loginUser(
			@Valid @RequestBody PasswordDTO passwordDTO,
			@PathVariable(value = "emailId") String emailId
			) 
			throws CustomInternalServerException, CustomNotFoundException, CustomBadRequestException {
		UserDetailsDTO userDetailsDTO = new UserDetailsDTO();
		userDetailsDTO = userService.findUserbyEmail(emailId);
		if(!userDetailsDTO.getPassword().equals(passwordDTO.getPassword())) {
			throw new CustomBadRequestException("Invalid login");
		}
		UserResponseDTO userResponseDTO = new UserResponseDTO();
		userResponseDTO.setEmailId(userDetailsDTO.getEmail());
		userResponseDTO.setFname(userDetailsDTO.getFname());
		userResponseDTO.setFundingDone(userDetailsDTO.getFundingDone());
		userResponseDTO.setLname(userDetailsDTO.getLname());
		userResponseDTO.setUserType(userDetailsDTO.getUserType());
		userResponseDTO.setId(userDetailsDTO.getId());
		return ResponseEntity.status(HttpStatus.OK).body(userResponseDTO);
	}
	
	@PostMapping("/fundProject")
	public ResponseEntity<UserResponseDTO> fundProject(
			@Valid @RequestBody PasswordDTO passwordDTO,
			@PathVariable(value = "emailId") String emailId
			) 
			throws CustomInternalServerException, CustomNotFoundException, CustomBadRequestException {
		UserDetailsDTO userDetailsDTO = new UserDetailsDTO();
		userDetailsDTO = userService.findUserbyEmail(emailId);
		if(!userDetailsDTO.getPassword().equals(passwordDTO.getPassword())) {
			throw new CustomBadRequestException("Invalid login");
		}
		UserResponseDTO userResponseDTO = new UserResponseDTO();
		userResponseDTO.setEmailId(userDetailsDTO.getEmail());
		userResponseDTO.setFname(userDetailsDTO.getFname());
		userResponseDTO.setFundingDone(userDetailsDTO.getFundingDone());
		userResponseDTO.setLname(userDetailsDTO.getLname());
		userResponseDTO.setUserType(userDetailsDTO.getUserType());
		userResponseDTO.setId(userDetailsDTO.getId());
		return ResponseEntity.status(HttpStatus.OK).body(userResponseDTO);
	}

}
