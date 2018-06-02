package com.teamb9.controller;

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
import com.teamb9.dto.ProjectDTO;
import com.teamb9.exception.CustomInternalServerException;
import com.teamb9.service.ProjectService;

@RestController
@Controller
@Component 
@RequestMapping("/api/projects")
public class ProjectController {
	
	private static final Logger logger = LoggerFactory
			.getLogger(UserController.class);
	
	@Autowired
	private ProjectService projectService;
	
	@GetMapping("/hello")
	private String hello() {
		return "hola project owner";
	}
	
	@PostMapping("/register")
	private ResponseEntity<GlobalResponseDTO> registerProject(@RequestBody ProjectDTO projectDTO) 
			throws CustomInternalServerException{
		projectService.createProject(projectDTO);
		GlobalResponseDTO globalResponseDTO = new GlobalResponseDTO();
		globalResponseDTO.setMessage("Project registered successfully");
		return ResponseEntity.status(HttpStatus.CREATED).body(globalResponseDTO);
	}
	
	@GetMapping("/getProjectDetails/{projectId}")
	private ProjectDTO getProjectDetails(
			@PathVariable(value = "projectId") String projectId) throws CustomInternalServerException {
		ProjectDTO projectDTO = projectService.fetchProjectDetails(projectId);
		return projectDTO;
	}
}
