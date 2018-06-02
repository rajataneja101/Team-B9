package com.teamb9.service;

import javax.persistence.ColumnResult;
import javax.persistence.EntityManager;
import javax.persistence.NamedNativeQueries;
import javax.persistence.NamedNativeQuery;
import javax.persistence.PersistenceContext;
import javax.persistence.SqlResultSetMapping;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.teamb9.controller.UserController;
import com.teamb9.dto.UserFundProjectDTO;
import com.teamb9.exception.CustomBadRequestException;
import com.teamb9.repository.UserFundProjectRepository;

@Service
public class UserFundProjectService {
	
	@Autowired
	UserFundProjectRepository userFundProjectRepository;
	
	private static final Logger logger = LoggerFactory
			.getLogger(UserController.class);
	
	public void fundProject(UserFundProjectDTO userFundProjectDTO) 
			throws CustomBadRequestException {
		try {
		userFundProjectRepository.save(userFundProjectDTO);
		userFundProjectRepository.updateProjectFunds(userFundProjectDTO.getProjectId());
		userFundProjectRepository.updateUserFunds(userFundProjectDTO.getUserId());
		}
		catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomBadRequestException("Bad request");
		}
	}
}
