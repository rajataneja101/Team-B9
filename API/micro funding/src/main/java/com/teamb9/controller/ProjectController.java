package com.teamb9.controller;

import java.util.List;

import org.hibernate.hql.spi.id.global.GlobalTemporaryTableBulkIdStrategy;
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
import com.teamb9.dto.ProjectStepsDTO;
import com.teamb9.dto.ProjectStepsRequestDTO;
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
		return "hola amigo project owner";
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
	
	@GetMapping("/getAllProjects")
	private List<ProjectDTO> getAllProjects() throws CustomInternalServerException {
		return projectService.fetchAllProjects();
	}
	
	@GetMapping("/getAllOwnerProjects/{userId}")
	private List<ProjectDTO> getAllOwnerProjects(@PathVariable(value = "userId") String userId) 
			throws CustomInternalServerException {
		return projectService.fetchAllOwnerProjects(userId);
	}
	
	
	@GetMapping("/{projectId}")
	private ResponseEntity<GlobalResponseDTO> checkProjectAvailability(@PathVariable(value = "projectId") String projectId) 
			throws CustomInternalServerException {
		try {
		projectService.checkProjectAvailability(projectId);
		GlobalResponseDTO globalResponseDTO = new GlobalResponseDTO();
		globalResponseDTO.setMessage("Project Id already in use");
		return ResponseEntity.status(HttpStatus.OK).body(globalResponseDTO);
		}
		catch(Exception e) {
			throw new CustomInternalServerException("Project not available");
		}
	}
	
	@PostMapping("/steps")
	private ResponseEntity<GlobalResponseDTO> registerProjectSteps(@RequestBody ProjectStepsDTO projectStepsDTO) 
			throws CustomInternalServerException{
		projectService.createProjectSteps(projectStepsDTO);
		GlobalResponseDTO globalResponseDTO = new GlobalResponseDTO();
		globalResponseDTO.setMessage("Project registered successfully");
		return ResponseEntity.status(HttpStatus.CREATED).body(globalResponseDTO);
	}
	
	@GetMapping("/steps/{projectId}")
	private List<ProjectStepsRequestDTO> getProjectSteps(@PathVariable(value = "projectId") String projectId) 
			throws CustomInternalServerException{
		return projectService.getProjectSteps(projectId);
	}
	
	@PostMapping("/steps/{stepId}")
	private ResponseEntity<GlobalResponseDTO> setStatusToCompleted(@PathVariable(value = "stepId") Long stepId) 
			throws CustomInternalServerException{
		projectService.updateProjectStatusToCompleted(stepId);
		GlobalResponseDTO globalResponseDTO = new GlobalResponseDTO();
		globalResponseDTO.setMessage("Step updated successfully");
		return ResponseEntity.status(HttpStatus.OK).body(globalResponseDTO);
	}
}
