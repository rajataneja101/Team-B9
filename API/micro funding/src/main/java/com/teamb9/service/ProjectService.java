package com.teamb9.service;

import java.util.List;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.teamb9.controller.UserController;
import com.teamb9.dto.ProjectDTO;
import com.teamb9.dto.ProjectStepsDTO;
import com.teamb9.dto.ProjectStepsRequestDTO;
import com.teamb9.dto.UserDetailsDTO;
import com.teamb9.exception.CustomInternalServerException;
import com.teamb9.exception.CustomNotFoundException;
import com.teamb9.repository.ProjectRepository;
import com.teamb9.repository.ProjectStepsRepository;

@Service
public class ProjectService {
	
	@Autowired
	ProjectRepository projectRepository;
	
	@Autowired
	ProjectStepsRepository projectStepsRepository;
	
	private static final Logger logger = LoggerFactory
			.getLogger(UserController.class);
	
	public void createProject(ProjectDTO projectDTO) 
			throws CustomInternalServerException {
		try {
			logger.info(projectDTO.getGovernment());
			projectRepository.save(projectDTO);
		} catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	
	public ProjectDTO fetchProjectDetails(String projectId) 
			throws CustomInternalServerException {
		try {
			
			return projectRepository.findByProjectId(projectId);
		} catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	
	
	public List<ProjectDTO> fetchAllProjects() 
			throws CustomInternalServerException {
		try {
			
			return projectRepository.findAll();
		} catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	
	public List<ProjectDTO> fetchAllOwnerProjects(String userId) 
			throws CustomInternalServerException {
		try {
			
			return projectRepository.findByUserId(userId);
		} catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	
	public void createProjectSteps(ProjectStepsDTO projectStepsDTO) 
			throws CustomInternalServerException {
		try {
			for (String array : projectStepsDTO.getProjectSteps()){
				ProjectStepsRequestDTO projectStepsRequestDTO = new ProjectStepsRequestDTO();
				projectStepsRequestDTO.setProjectId(projectStepsDTO.getProjectId());
				projectStepsRequestDTO.setProjectSteps(array);
				projectStepsRequestDTO.setStatus("In progress");
				projectStepsRepository.save(projectStepsRequestDTO);
			}
			
		} catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	
	public void checkProjectAvailability(String projectId)
			throws CustomNotFoundException, CustomInternalServerException
	{
		ProjectDTO projectDTO = projectRepository.findByProjectId(projectId);
		if(projectDTO == null) {
			throw new CustomNotFoundException("Project not found");
		}
	}
	
	public List<ProjectStepsRequestDTO> getProjectSteps(String projectId) 
			throws CustomInternalServerException {
		try {
				return projectStepsRepository.getProjectSteps(projectId);			
		} catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	
	public void updateProjectStatusToCompleted(Long stepId) 
			throws CustomInternalServerException {
		try {
				projectStepsRepository.updateProjectStatusToCompleted(stepId);			
		} catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	

}
