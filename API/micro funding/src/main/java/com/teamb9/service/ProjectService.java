package com.teamb9.service;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.teamb9.controller.UserController;
import com.teamb9.dto.ProjectDTO;
import com.teamb9.dto.UserDetailsDTO;
import com.teamb9.exception.CustomInternalServerException;
import com.teamb9.repository.ProjectRepository;

@Service
public class ProjectService {
	
	@Autowired
	ProjectRepository projectRepository;
	
	private static final Logger logger = LoggerFactory
			.getLogger(UserController.class);
	
	public void createProject(ProjectDTO projectDTO) 
			throws CustomInternalServerException {
		try {
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

}
