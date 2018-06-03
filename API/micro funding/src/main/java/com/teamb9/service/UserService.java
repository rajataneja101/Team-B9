package com.teamb9.service;

import java.util.List;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.teamb9.controller.UserController;
import com.teamb9.dto.UserDetailsDTO;
import com.teamb9.dto.UserFundProjectDTO;
import com.teamb9.exception.CustomInternalServerException;
import com.teamb9.exception.CustomNotFoundException;
import com.teamb9.repository.UserFundProjectRepository;
import com.teamb9.repository.UserRepository;

@Service
public class UserService {

	@Autowired
	UserRepository userRepository;
	
	@Autowired
	UserFundProjectRepository userFundProjectRepository;
	
	private static final Logger logger = LoggerFactory
			.getLogger(UserController.class);
	
	public List<UserDetailsDTO> getAllUsers(){
		return userRepository.findAll();
	}
	
	public void createUser(UserDetailsDTO userRequestDTO) 
			throws CustomInternalServerException {
		try {
		userRepository.save(userRequestDTO);
		} catch(Exception e) {
			throw new CustomInternalServerException("Something went wrong");
		}
	}
	
	public UserDetailsDTO findUserbyEmail(String email) 
			throws CustomNotFoundException {
		UserDetailsDTO userRequestDTO = userRepository.findByEmail(email);
		if(userRequestDTO != null) {
			return userRequestDTO;
		}
		throw new CustomNotFoundException("User not found");
	}
	
	public void updateUserDetails(String email,String password)
			throws CustomNotFoundException, CustomInternalServerException
	{
		UserDetailsDTO userDetailsDTO = userRepository.findByEmail(email);
		if(userDetailsDTO == null) {
			throw new CustomNotFoundException("User not found");
		}
	    userDetailsDTO.setPassword(password);	  
	    if(userRepository.save(userDetailsDTO) == null) {
	    	throw new CustomInternalServerException("Something went wrong while saving user details");
	    }
	}
	
	public void checkEmailAvailability(String email)
			throws CustomNotFoundException, CustomInternalServerException
	{
		UserDetailsDTO userDetailsDTO = userRepository.findByEmail(email);
		if(userDetailsDTO == null) {
			throw new CustomNotFoundException("User not found");
		}
	}
	
	public List<UserFundProjectDTO> findFundedProjects(String userId) throws CustomInternalServerException {
		try {
		return userFundProjectRepository.findFundedProjects(userId);
		}catch(Exception e) {
			logger.info(e.getMessage());
			throw new CustomInternalServerException("Something went wrong");
		}
	}
}
