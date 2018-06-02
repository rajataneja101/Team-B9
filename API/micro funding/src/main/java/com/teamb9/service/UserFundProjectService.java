package com.teamb9.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.teamb9.dto.UserFundProjectDTO;
import com.teamb9.exception.CustomBadRequestException;
import com.teamb9.repository.UserFundProjectRepository;

@Service
public class UserFundProjectService {
	
	@Autowired
	UserFundProjectRepository userFundProjectRepository;
	
	public void fundProject(UserFundProjectDTO userFundProjectDTO) 
			throws CustomBadRequestException {
		try {
		userFundProjectRepository.save(userFundProjectDTO);
		}
		catch(Exception e) {
			throw new CustomBadRequestException("Bad request");
		}
	}
}
