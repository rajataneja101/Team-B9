package com.teamb9.controller;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Component;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.teamb9.dto.GlobalResponseDTO;
import com.teamb9.dto.UserDetailsDTO;
import com.teamb9.dto.UserFundProjectDTO;
import com.teamb9.exception.CustomBadRequestException;
import com.teamb9.exception.CustomInternalServerException;
import com.teamb9.service.UserFundProjectService;

@RestController
@Controller
@Component 
@RequestMapping("/api/funds")
public class UserFundProjectController {
	
	@Autowired
	UserFundProjectService userFundProjectService;
	
	@PostMapping("/userFundProject/{userId}")
	public ResponseEntity<GlobalResponseDTO> fundProject(@Valid @RequestBody UserFundProjectDTO userFundProjectDTO,
			@PathVariable(value = "userId") String userId) 
			throws CustomInternalServerException, CustomBadRequestException {
		userFundProjectDTO.setUserId(userId);
		userFundProjectService.fundProject(userFundProjectDTO);
		GlobalResponseDTO globalResponseDTO = new GlobalResponseDTO();
		globalResponseDTO.setMessage("user registered successfully");
		return ResponseEntity.status(HttpStatus.CREATED).body(globalResponseDTO);
	}

}
